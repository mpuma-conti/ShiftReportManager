<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReportsController;

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
    //return view('welcome');
    return redirect(route('login'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('nuevo-reporte', ReportsController::class)
    ->only(['index', 'store'])
    ->middleware(['auth']);

//URL en plural
Route::middleware('auth')->group(function () {
    Route::get('/reportes', [ReportsController::class, 'mostrarTodos'])->name('reportes.mostrarTodos');
});

//la URL es reporte en singular
Route::middleware('auth')->group(function () {
    Route::get('/reporte', [ReportsController::class, 'edit'])->name('report.edit');
    Route::patch('/reporte', [ProfileController::class, 'update'])->name('report.update');
    Route::delete('/reporte', [ProfileController::class, 'destroy'])->name('report.destroy');
});

/*Route::get('reportes', function () {
        return view('reports.all');
})->name('reportes');*/

Route::get('/plantilla', function () {
        return view('plantilla');
})->name('plantilla');

require __DIR__.'/auth.php';
