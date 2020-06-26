<?php

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


Route::get('admin/calculadora',['as'=>'admin.calculadora','uses'=>'Admin\CalculadoraController@index']);
Route::post('admin/calculadora/calcular',['as'=>'admin.calculadora.calcular','uses'=>'Admin\CalculadoraController@calcular']);
Route::get('admin/calculadora/outros',['as'=>'admin.calculadora.outros','uses'=>'Admin\CalculadoraController@outros']);
