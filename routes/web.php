<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\ExportCvController; 
use App\Http\Controllers\Auth\CustomAuthenticatedSessionController;


/*
|--------------------------------------------------------------------------
| AUTH AREA
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => redirect()->route('login.form'));

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');

Route::post('/login', [CustomAuthenticatedSessionController::class, 'store'])
    ->middleware(['guest'])
    ->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', fn () => view('register'))->name('register');
Route::post('/register/action', [AuthController::class, 'registerAction'])->name('register.action');



/*
|--------------------------------------------------------------------------
| DASHBOARD + FEATURES
|--------------------------------------------------------------------------
*/

Route::post('/login', [CustomAuthenticatedSessionController::class, 'store'])
    ->middleware(['guest'])
    ->name('login');

Route::middleware('auth')->group(function () {

    // MAIN dashboard
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');

    // Search function
    Route::get('/dashboard/search', [SearchController::class, 'search'])->name('dashboard.search');
    Route::get('/search', [SearchController::class, 'search']); // backup route

    // Portfolio page
    Route::get('/portofolio', fn () => view('portofolio'))->name('portofolio');

    // Article page
    Route::get('/article', fn () => view('article'))->name('article');

    // Export PDF landing page 
    Route::get('/exportpdf', fn () => view('exportpdf'))->name('exportpdf');

    // Inbox
    Route::get('/inbox', fn () => view('inbox'))->name('inbox');



    /*
    |--------------------------------------------------------------------------
    | EXPORT FEATURES (PDF + DOCX)
    |--------------------------------------------------------------------------
    */

    Route::prefix('export-cv')->group(function () {

        // Halaman utama export CV 
        Route::get('/', [ExportCvController::class, 'index'])->name('export.index');

        // Buat CV baru
        Route::get('/create', [ExportCvController::class, 'create'])->name('export.create');
        Route::post('/store', [ExportCvController::class, 'store'])->name('export.store');

        // Edit CV
        Route::get('/edit/{id}', [ExportCvController::class, 'edit'])->name('export.edit');
        Route::put('/update/{id}', [ExportCvController::class, 'update'])->name('export.update');

        // Export fungsi
        Route::get('/pdf/{id}', [ExportCvController::class, 'exportPdf'])->name('export.pdf');
        Route::get('/docx/{id}', [ExportCvController::class, 'exportDocx'])->name('export.docx');
    });

    // Admin
    Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

        // Admin dashboard
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

        // List users
        Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users');

        // Lihat CV user
        Route::get('/users/{id}/cv', [AdminUserController::class, 'cvList'])->name('admin.users.cv');

        // Tampilkan CV per ID
        Route::get('/cv/{id}', [AdminUserController::class, 'viewCv'])->name('admin.cv.view');
    });

});
