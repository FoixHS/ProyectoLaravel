<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posteo;

class PosteosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function detalle($id){
      $posteo = Posteo::find($id);
      $vac = compact('posteo');
      return view("detallePosteo", $vac);
    }

    public function agregar(Request $form){
      $posteo = new Posteo();

      $ruta = $form->file('img')->store("public");
      $nombreArchivo=basename($ruta);

      $posteo->img=$nombreArchivo;
      $posteo->user_id=$form["user_id"];
      $posteo->estado=$form["estado"];
      $posteo->tipo_animal=$form["tipo_animal"];
      $posteo->barrio=$form["barrio"];
      $posteo->raza=$form["raza"];
      $posteo->texto=$form["texto"];
      $posteo->save();
      return redirect("home");
    }

}
