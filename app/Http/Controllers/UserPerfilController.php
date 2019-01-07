<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserPerfilController extends Controller
{
    public function mostrarPerfil(Request $request){
    	$user = new User();
    	$user = $user->find(($request->route('id')));
    	return $user;
    }
}
