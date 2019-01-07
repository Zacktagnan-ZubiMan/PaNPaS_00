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
Route::get('/admin', 'AdminController@index'); //página principal del administrador
Route::get('/admin2', function () {
    return view('admin.indexTEMP'); 			//página original de la plantilla
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/enviarDatosContacto', 'ContactoController@guardarDatos'); //guarda los datos del formulario de la landing page en la DDBB

Route::post('/admin/editarUsuario', 'UserController@editarUsuario');	//modifica los datos de un usuario en la DDBB
Route::post('/admin/borrarUsuario', 'UserController@borrarUsuario');	//borra un usuario de la DDBB

Route::get ('/receta', 'RecetaController@mostrar');






//Rutas de la parte pública
Route::get ('/user/perfil/{id}', 'UserPerfilController@mostrarPerfil'); //mostrar perfil del usuario con información pública




// [API]recoger datos 

Route::get ('/api/usuarios', 'ApiController@getUsuarios'); 	//json de todos los usuarios registrados
Route::get ('/api/perfiles', 'ApiController@getPerfiles');	//json de todos los perfiles disponibles
