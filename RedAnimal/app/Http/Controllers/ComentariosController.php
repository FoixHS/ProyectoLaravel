<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comentario;

class ComentariosController extends Controller
{
  public function comentar(Request $form){
    $comentario = new Comentario();

    $comentario->user_id=$form["user_id"];
    $comentario->texto=$form["texto"];
    $comentario->date=$form["fecha"];
    $comentario->posteo_id=$form["posteo_id"];
    $comentario->save();

    return view('detallePosteo');
  }

 public function mostrar(){
   $comentarios = Comentario::all();
   return view('detallePosteo', compact('comentarios'));
 }
}
