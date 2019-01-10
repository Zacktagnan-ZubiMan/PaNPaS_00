<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Receta;
use App\Comentario;
class RecetaController extends Controller
{
    
	public function mostrar() {

		$id = 5;

		$receta = new Receta();
		$comentarios = new Comentario();

		$receta = $receta->find($id);
		$comentarios = $comentarios->get()->where('receta_id', $id);

		return view ('user/receta', ['receta'=>$receta, 'comentarios' => $comentarios, 'time'=>time()]);
	}

}
