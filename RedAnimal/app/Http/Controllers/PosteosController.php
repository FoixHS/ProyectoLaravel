<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posteo;
use App\comentario;

class PosteosController extends Controller
{
    public function detalle($id){
<<<<<<< HEAD
      $posteo = posteo::find($id);
      return view("detallePosteo", compact('posteo'));
=======
      $posteo = Posteo::find($id);
      $comentarios = Comentario::where('posteo_id','=',$id)->get();
      return view("detallePosteo", compact('posteo', 'comentarios'));
>>>>>>> e0112ec6a62cecfd0187ad6d35f23ad39e6b07fa
    }

    public function agregar(Request $form){
      $posteo = new Posteo();

      $ruta = $form->file('img')->store("public");
      $nombreArchivo=basename($ruta);

      $posteo->img=$nombreArchivo;
      $posteo->user_id=$form["user_id"];
      $posteo->user_email=$form["user_email"];
      $posteo->estado=$form["estado"];
      $posteo->tipo_animal=$form["tipo_animal"];
      $posteo->barrio=$form["barrio"];
      $posteo->raza=$form["raza"];
      $posteo->texto=$form["texto"];
      $posteo->fecha=$form["fecha"];
      $posteo->save();
      return redirect("home");
    }

}
