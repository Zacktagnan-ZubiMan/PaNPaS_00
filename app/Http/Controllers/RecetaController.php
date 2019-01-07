<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    
	public function mostrar() {
		return view ('user/receta');
	}

}
