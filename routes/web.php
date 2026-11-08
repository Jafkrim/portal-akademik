<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminDashboardController;

Route::get('/', function () {
    if (auth()->check()) {
        return app(PageController::class)->index(request());
    }
    return view('welcome');
})->name('home');

Route::get('/mahasiswa/{nrp}', [PageController::class, 'profil'])
    ->where('nrp', '[0-9]{10}')
    ->name('profil.detail');

Route::get('/agent/{tema?}', [PageController::class, 'project'])
    ->name('project.idea');

Route::get('/feedback', [PageController::class, 'feedback'])->name('feedback.form');

Route::post('/feedback', [PageController::class, 'storeFeedback'])->name('feedback.store');

Route::resource('project', ProjectController::class)->middleware('auth');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', 'role:admin'])
    ->name('admin.dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('project', ProjectController::class)->middleware('auth');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', 'role:admin'])
    ->name('admin.dashboard');

require __DIR__.'/auth.php';
