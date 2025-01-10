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
    Route::post('/experimento/{experimento}/material/', [ExperimentoController::class, 'create_experimento_material'])->name('experimento.material.create');
    Route::delete('/experimento/{experimento}/material/{material}/', [ExperimentoController::class, 'destroy_experimento_material'])->name('experimento.material.destroy');
    Route::post('/experimento/{experimento}/equipamento/', [ExperimentoController::class, 'create_experimento_equipamento'])->name('experimento.equipamento.create');
    Route::delete('/experimento/{experimento}/equipamento/{equipamento}/', [ExperimentoController::class, 'destroy_experimento_equipamento'])->name('experimento.equipamento.destroy');
    Route::post('/experimento/{experimento}/reagente/', [ExperimentoController::class, 'create_experimento_reagente'])->name('experimento.reagente.create');
    Route::delete('/experimento/{experimento}/reagente/{reagente}/', [ExperimentoController::class, 'destroy_experimento_reagente'])->name('experimento.reagente.destroy');
    Route::post('/experimento/{experimento}/residuo/', [ExperimentoController::class, 'create_experimento_residuo'])->name('experimento.residuo.create');
    Route::delete('/experimento/{experimento}/residuo/{residuo}/', [ExperimentoController::class, 'destroy_experimento_residuo'])->name('experimento.residuo.destroy');

Route::resource('/residuo', ResiduoController::class);

