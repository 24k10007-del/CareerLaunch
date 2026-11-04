<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;
use PDF;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class ExportCvController extends Controller
{
    // list semua CV user
    public function index()
    {
        $cvs = Cv::where('user_id', auth()->id())->get();
        return view('export_cv.index', compact('cvs'));
    }

    // form create cv
    public function create()
    {
        return view('export_cv.create');
    }

    // simpan CV baru
    public function store(Request $request)
    {
        Cv::create([
            'user_id'   => auth()->id(),
            'title'     => $request->title,
            'summary'   => $request->summary,
            'experience'=> $request->experience,
            'education' => $request->education,
            'skills'    => $request->skills,
        ]);

        return redirect()->route('export.index')->with('success','CV created!');
    }

    // form edit CV
    public function edit($id)
    {
        $cv = Cv::where('user_id', auth()->id())->findOrFail($id);
        return view('export_cv.edit', compact('cv'));
    }

    // update CV
    public function update(Request $request, $id)
    {
        $cv = Cv::where('user_id', auth()->id())->findOrFail($id);
        $cv->update($request->all());

        return redirect()->route('export.index')->with('success','CV updated!');
    }

    // export PDF
    public function exportPdf($id)
    {
        $cv = Cv::where('user_id', auth()->id())->findOrFail($id);

        $pdf = PDF::loadView('export_cv.pdf', compact('cv'));
        return $pdf->download($cv->title.'.pdf');
    }

    // export DOCX
    public function exportDocx($id)
    {
        $cv = Cv::where('user_id', auth()->id())->findOrFail($id);

        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        $section->addText($cv->title);
        $section->addText($cv->summary);
        $section->addText($cv->experience);
        $section->addText($cv->education);
        $section->addText($cv->skills);

        $filename = $cv->title.'.docx';
        $path = public_path($filename);

        $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($path);

        return response()->download($path)->deleteFileAfterSend(true);
    }
}

