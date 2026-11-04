<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $q = strtolower($request->q);

        // Redirect logic
        if ($q === 'portofolio' || $q === 'portofolio') {
            return redirect()->route('portofolio');
        }

        if ($q === 'article' || $q === 'articles' || $q === 'artikel') {
            return redirect()->route('article');
        }

        if ($q === 'export' || $q === 'export pdf' || $q === 'pdf') {
            return redirect()->route('exportpdf');
        }

        if ($q === 'inbox' || $q === 'message') {
            return redirect()->route('dashboard.inbox');
        }

        // Default → Not Found
        return back()->with('error', 'Page not found');
    }
}
