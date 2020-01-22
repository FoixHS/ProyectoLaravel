<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posteo;
use App\comentario;

class PosteosController extends Controller
{
    public function detalle($id){
        $posteo = Posteo::find($id);
        $comentarios = Comentario::where('posteo_id','=',$id)->get();
        return view("detallePosteo", compact('posteo', 'comentarios'));
    }

    public function agregar(Request $form){
      $posteo = new Posteo();

      $form->validate([
          'img' => 'required|image|mimes:jpeg,png,jpg,svg|max:4096',
          'fecha' => 'required',
          'estado' => 'required',
          'tipo_animal' => 'required',
          'barrio' => 'required',
          'raza' => 'required',
          'texto' => 'required',
      ]);

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
