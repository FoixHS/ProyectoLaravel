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
  }

  public function actualizarFoto(Request $request){
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,svg|max:4096',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('public',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success','You have successfully upload image.');

  }
}
