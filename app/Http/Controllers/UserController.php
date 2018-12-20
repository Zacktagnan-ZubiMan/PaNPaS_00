<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Route;

class UserController extends Controller
{
    public function editarUsuario(){
    	$id = $_POST['id'];
    	$nick = $_POST['nick'];
    	$nombre = $_POST['nombre'];
    	$apellido = $_POST['apellido'];
    	$email = $_POST['email'];
    	$cuenta = $_POST['tipoCuenta'];

    	$user = new User();

    	$user = $user::find($id);

    	$user->nick = $nick;
    	$user->nombre = $nombre;
    	$user->apellido = $apellido;
    	$user->email = $email;
    	$user->perfil_id = $cuenta;

    	$user->save();

    	 return redirect('/admin');


    }


    public function borrarUsuario(){
        return $_GET['id'];
    }
}
