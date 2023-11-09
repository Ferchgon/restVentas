<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;

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
    return view('welcome');
});
Route::get('/consulta/form', [ConsultaController::class, 'showForm'])->name('showForm');
Route::post('/consulta/consultarPorUUID', [ConsultaController::class, 'consultarPorUUID'])->name('consultarPorUUID');