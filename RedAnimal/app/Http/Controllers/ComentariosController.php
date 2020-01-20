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
    $comentario->user_email=$form["user_email"];
    $comentario->date=$form["fecha"];
    $comentario->posteo_id=$form["posteo_id"];
    $comentario->save();

    return redirect("home");
  }
}
