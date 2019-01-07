<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Receta;
use App\Comentario;
class RecetaController extends Controller
{
    
	public function mostrar() {

		$receta = new Receta();
		$comentarios = new Comentario();

		$receta = $receta->find(3);
		$comentarios = $comentarios->get()->where('receta_id', 3);

		
		return view ('user/receta', ['receta'=>$receta, 'comentarios' => $comentarios]);
	}

}
