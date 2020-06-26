<?php

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

Route::get('/', function () {
    return view('welcome');
});

//rota com apelido
//Route::get('listagem-usuario',['as'=>'listagem','uses'=>'UserController@listuser']);

Route::get('listagem-usuario','UserController@listuser');
Route::group(['namespace' => 'Form'], function() {
Route::get('usuarios','TestController@listAllUsers')->name('users.listAll');
Route::get('usuarios/novo','TestController@formAddUser')->name('users.formAddUser');
Route::get('usuarios/editar/{user}','TestController@formEditUser')->name('users.formEditUser');
Route::get('usuarios/{user}','TestController@listUser')->name('user.list');
Route::post('usuarios/cadastro','TestController@cadastro')->name('users.cadastro');
Route::put('usuarios/edit/{user}','TestController@edit')->name('users.edit');
Route::delete('usuarios/delete/{user}','TestController@delete')->name('users.delete');
});

