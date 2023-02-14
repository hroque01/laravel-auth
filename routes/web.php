<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home']);
Route::get('project/show/{project}', [MainController::class, 'show'])->name('project.show');

// Route::middleware(['auth', 'verified'])
Route::middleware([])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        // Route::get('/', [MainController::class, 'privateHome']);
        Route::get('/project/create', [MainController::class, 'create'])
            ->name('project.create');
        Route::post('/project/store', [MainController::class, 'store'])
            ->name('project.store');
    });



// Route::get('/dashboard', function () {
// return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';