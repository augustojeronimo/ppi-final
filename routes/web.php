<?php

use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\ExperimentoController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MovelController;
use App\Http\Controllers\ReagenteController;
use App\Http\Controllers\ResiduoController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome')->name('inicio');

Route::resource('/movel', MovelController::class);
Route::resource('/equipamento', EquipamentoController::class);
Route::resource('/material', MaterialController::class);
Route::resource('/reagente', ReagenteController::class);
Route::resource('/experimento', ExperimentoController::class);
Route::resource('/residuo', ResiduoController::class);

