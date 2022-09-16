<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FincasController;
use App\Http\Controllers\RegTerminacionController;
use App\Http\Controllers\DefectosController;
use App\Http\Controllers\TapasController;
use App\Http\Controllers\TablaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('plantilla');
});

Route::view('/', 'paginas.raiz');
Route::view('/fincas', 'paginas.fincas');
Route::view('/regTerminacion', 'paginas.regTerminacion');
Route::view('/lluvias', 'paginas.lluvias');
Route::view('/defectos', 'paginas.defectos');
Route::view('/tapas', 'paginas.tapas');
Route::view('/tabla', 'paginas.tabla');

// Route::get('/fincas', 'fincasController@traerfincas');


// ========= Método actual para conectarse a un controlador ============ //

Route::get('/fincas', [FincasController::class, 'traerFincas']);
Route::get('/regTerminacion', [RegTerminacionController::class, 'RegTerminacion']);
Route::get('/defectos', [DefectosController::class, 'Defectos']);
Route::get('/tapas', [TapasController::class, 'Tapas']);
Route::get('/tabla', [TablaController::class, 'Tabla']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
