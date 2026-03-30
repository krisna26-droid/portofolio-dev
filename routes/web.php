<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\AuthController;
use App\Models\Project;

// Redirect awal ke EN
Route::get('/', function () {
    return redirect('/en');
});

// Helper function untuk data statis agar tidak duplikasi
function getParasData()
{
    return [
        'features' => [
            ['id' => 'clean-code',    'icon' => 'code-2'],
            ['id' => 'fast-delivery', 'icon' => 'zap'],
            ['id' => 'team-player',   'icon' => 'users'],
            ['id' => 'performance',   'icon' => 'gauge'],
        ],
        'stacks' => [
            ['name' => 'Laravel', 'icon' => 'https://skillicons.dev/icons?i=laravel'],
            ['name' => 'WordPress', 'icon' => 'https://skillicons.dev/icons?i=wordpress'],
            ['name' => 'Tailwind', 'icon' => 'https://skillicons.dev/icons?i=tailwind'],
            ['name' => 'Vue', 'icon' => 'https://skillicons.dev/icons?i=vue'],
            ['name' => 'MySQL', 'icon' => 'https://skillicons.dev/icons?i=mysql'],
        ]
    ];
}

// 1. ROUTE LANDING PAGE (Utama)
Route::get('/{lang}', function ($lang) {
    if (!in_array($lang, ['en', 'id', 'jp'])) abort(404);
    App::setLocale($lang);

    $projects = Project::latest()->take(6)->get(); // Ambil 6 saja untuk landing page
    $data = getParasData();

    return view('index', array_merge([
        'projects' => $projects
    ], $data));
})->where('lang', 'en|id|jp')->name('home');

// 2. ROUTE ALL PROJECTS (Halaman Baru PARAS)
Route::get('/{lang}/projects', function ($lang) {
    if (!in_array($lang, ['en', 'id', 'jp'])) abort(404);
    App::setLocale($lang);

    $projects = Project::latest()->get(); // Ambil semua project
    $data = getParasData();

    return view('index', array_merge([
        'projects' => $projects
    ], $data));
})->where('lang', 'en|id|jp')->name('projects.all');

// ADMIN AUTH
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

// PROTECTED ADMIN CRUD
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects');
    Route::post('/projects', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');
});
