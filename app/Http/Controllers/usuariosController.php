<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use Illuminate\Support\Facades\Auth;

class usuariosController extends Controller
{
  public function profile()
  {
      $user = Auth::user();
      return view('perfil',compact('user',$user));
  }}
