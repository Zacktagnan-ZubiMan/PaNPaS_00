<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Perfil;

class ApiController extends Controller
{
    public function getUsuarios(){
    	$users = new User();

    	$users = $users->all();

    	return $users;
    }

        public function getPerfiles(){
    	$perfiles = new Perfil();

    	$perfiles = $perfiles->all();

    	return $perfiles;
    }
}
