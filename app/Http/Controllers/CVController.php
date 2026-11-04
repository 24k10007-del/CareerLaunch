use App\Models\CV;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use PDF; // barryvdh/laravel-dompdf
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class CVController extends Controller
{
    public function index() {
        $cvs = CV::all();
        return view('export.index', compact('cvs'));
    }

    public function create() {
        return view('export.create');
    }

    public function store(Request $r) {
        CV::create($r->all());
        return redirect()->route('export.index')->with('success', 'CV created!');
    }

    public function edit($id) {
        $cv = CV::findOrFail($id);
        return view('export.edit', compact('cv'));
    }

    public function update(Request $r, $id) {
        $cv = CV::findOrFail($id);
        $cv->update($r->all());
        return redirect()->route('export.index')->with('success', 'CV updated!');
    }


    // ============================
    // EXPORT PDF
    // ============================
    public function exportPdf($id) {
        $cv = CV::findOrFail($id);
        $pdf = PDF::loadView('export.templates.pdf', compact('cv'));
        return $pdf->download("CV-{$cv->name}.pdf");
    }


    // ============================
    // EXPORT DOCX (Word)
    // ============================
    public function exportDocx($id) {
        $cv = CV::findOrFail($id);

        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        $section->addText("Curriculum Vitae", ['bold' => true, 'size' => 20]);
        $section->addTextBreak();

        $section->addText("Name: $cv->name");
        $section->addText("Email: $cv->email");
        $section->addText("Phone: $cv->phone");
        $section->addTextBreak();
        $section->addText("About:");
        $section->addText($cv->about);
        $section->addTextBreak();
        $section->addText("Skills:");
        $section->addText($cv->skills);
        $section->addTextBreak();
        $section->addText("Experience:");
        $section->addText($cv->experience);

        $fileName = "CV-{$cv->name}.docx";
        $path = storage_path($fileName);
        IOFactory::createWriter($phpWord, 'Word2007')->save($path);

        return response()->download($path)->deleteFileAfterSend(true);
    }
}
