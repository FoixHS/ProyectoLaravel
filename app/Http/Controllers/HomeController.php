<?php

namespace App\Http\Controllers;

use App\posteo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
    if (!$_GET) {
      $posteos = posteo::paginate(15);
      return view('home',compact('posteos'));
    }
    if ($_GET['page']) {
      $posteos = posteo::paginate(15);
      return view('home',compact('posteos'));
    }else{
    if (isset($_GET['filtro'])) {
      if ($_GET['filtro']=='encon') {
        $posteos = posteo::where('estado','=','Encontrado')->paginate(15);
        return view('home',compact('posteos'));
      }
      if ($_GET['filtro']=='perd') {
        $posteos = posteo::where('estado','=','Perdido')->paginate(15);
        return view('home',compact('posteos'));
    }
    if ($_GET['filtro']=='adopt') {
      $posteos = posteo::where('estado','=','En adopción')->paginate(15);
      return view('home',compact('posteos'));
    }
    if ($_GET['filtro']=='todos') {
      $posteos = posteo::paginate(15);
      return view('home',compact('posteos'));
    }
}}}}
