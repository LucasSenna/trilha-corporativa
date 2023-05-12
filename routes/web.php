<?php

use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SetorController;
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


Route::get('/itens', [ItemController::class, 'index'])->name('itens.index');
Route::get('/itens/criar', [ItemController::class, 'create'])->name('itens.create');

Route::get('/setores', [SetorController::class, 'index'])->name('setores.index');


Route::get('/competencias', [CompetenciaController::class, 'index'])->name('competencias.index');
Route::get('/competencias/criar', [CompetenciaController::class, 'create'])->name('competencias.create');


Route::get('/', function () {
    return view('welcome');
});
