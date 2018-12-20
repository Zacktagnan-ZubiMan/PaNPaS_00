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
    return view('index');
});
Route::get('/admin', 'AdminController@index');
Route::get('/admin2', function () {
    return view('admin.indexTEMP');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/enviarDatosContacto', 'ContactoController@guardarDatos');

Route::post('/admin/editarUsuario', 'UserController@editarUsuario');
Route::post('/admin/borrarUsuario', 'UserController@borrarUsuario');





// [API]recoger datos 

Route::get ('/api/usuarios', 'ApiController@getUsuarios');
Route::get ('/api/perfiles', 'ApiController@getPerfiles');
