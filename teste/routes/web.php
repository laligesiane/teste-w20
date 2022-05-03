<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradoresController;
use App\Http\Controllers\EmpresasController;
use App\Http\Livewire\OnColaboradoresClick;

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
    return view('welcome');
});

Route::get('/form',function() {
    return view('empresa.form');
 });

Route::get('/colaboradores',[ColaboradoresController::class,'show']);

Route::get('/on-colaboradores-click', OnColaboradoresClick::class);

Route::get('/empresa/index');

Route::get('/validation','App\Http\Controllers\ValidationController@showform');

Route::post('/validation','App\Http\Controllers\ValidationController@validateform');