<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasController;

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
    return redirect('/empresas/');
});

Route::resource('empresas', EmpresasController::class);

/*
Route::get('empresas/novo', 'App\Http\Controllers\EmpresasController@create');
Route::post('empresas/novo', 'App\Http\Controllers\EmpresasController@store')->name('criar_empresa');
Route::get('empresas/empresa/{id}', 'App\Http\Controllers\EmpresasController@show');
Route::post('empresas/empresa/{id}', 'App\Http\Controllers\EmpresasController@update')->name('atualizar_empresa');
*/