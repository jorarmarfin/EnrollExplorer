<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin/fichas',\App\Livewire\Admin\LiveAdminFicha::class)
    ->middleware(['auth', 'verified'])
    ->name('admin.fichas');

Route::get('admin/usuarios',\App\Livewire\Admin\LiveAdminUsuarios::class)
    ->middleware(['auth', 'verified'])
    ->name('admin.usuarios');


Route::controller(\App\Http\Controllers\Admin\UserStatisticsController::class)
    ->middleware(['auth', 'verified'])
    ->prefix('admin/estadisticas')
    ->group(function () {
        Route::get('/', 'index')->name('admin.estadisticas');
    });

Route::get('/download-pdf/{filename}', 'PdfController@download')
    ->middleware(['auth', 'verified'])
    ->name('download.pdf');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
