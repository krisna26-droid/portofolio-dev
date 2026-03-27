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

// FRONTEND VIEW
Route::get('/{lang}', function ($lang) {
    if (!in_array($lang, ['en', 'id', 'jp'])) abort(404);
    App::setLocale($lang);

    $projects = Project::latest()->get();

    $features = [
        ['title' => 'Clean Code',    'desc' => 'Standard maintainable code.',    'icon' => 'code-2'],
        ['title' => 'Fast Delivery', 'desc' => 'Agile iterations.',               'icon' => 'zap'],
        ['title' => 'Team Player',   'desc' => 'Stakeholder collaboration.',      'icon' => 'users'],
        ['title' => 'Performance',   'desc' => 'Optimized load times.',           'icon' => 'gauge'],
    ];
    $stacks = [
        ['name' => 'Laravel', 'icon' => 'https://skillicons.dev/icons?i=laravel'],
        ['name' => 'React', 'icon' => 'https://skillicons.dev/icons?i=react'],
        ['name' => 'Tailwind', 'icon' => 'https://skillicons.dev/icons?i=tailwind'],
        ['name' => 'Node.js', 'icon' => 'https://skillicons.dev/icons?i=nodejs'],
        ['name' => 'PostgreSQL', 'icon' => 'https://skillicons.dev/icons?i=postgres'],
        ['name' => 'Docker', 'icon' => 'https://skillicons.dev/icons?i=docker'],
    ];

    return view('index', compact('projects', 'features', 'stacks'));
})->where('lang', 'en|id|jp');

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
