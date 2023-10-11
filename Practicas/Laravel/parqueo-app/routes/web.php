<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TarifaController;
use App\Http\Controllers\TiposDocumentoController;

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
    # porner la ruta de inicio tarifa index
    return view('inicial');
});
Route::resource('cliente',ClienteController::class);
Route::get('tiposdocumento/{id}', [TiposDocumentoController::class,'listar'])->name('tiposdocumento.listar');
Route::resource('tarifa',TarifaController::class);