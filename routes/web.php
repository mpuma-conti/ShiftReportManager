<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReportsController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\CodigoController;

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
    Route::get('/reportes-electricos', [ReportsController::class, 'mostrarReportesElectricos'])->name('reportes.mostrarReportesElectricos');
    Route::get('/reportes-mecanicos', [ReportsController::class, 'mostrarReportesMecanicos'])->name('reportes.mostrarReportesMecanicos');
    Route::get('/reportes-importantes', [ReportsController::class, 'mostrarReportesImportantes'])->name('reportes.mostrarReportesImportantes');
});

//la URL es reporte en singular
Route::middleware('auth')->group(function () {
    Route::get('/reporte/{report}/edit', [ReportsController::class, 'edit'])->name('report.edit');
    Route::patch('/reporte/{report}', [ReportsController::class, 'update'])->name('report.update');
    Route::delete('/reporte', [ReportsController::class, 'destroy'])->name('report.destroy');
});

/*Route::get('reportes', function () {
        return view('reports.all');
})->name('reportes');*/

//Motores
Route::middleware('auth')->group(function () {
    Route::get('/motores-standby', [MotorController::class, 'index'])->name('motores.index');
});

//buscar campos para autocompletado
Route::get('/buscar_campos', [CodigoController::class, 'buscarCodigos']);

//Aire instrumental


Route::get('/plantilla', function () {
        return view('aire.new');
})->name('plantilla');

require __DIR__.'/auth.php';
