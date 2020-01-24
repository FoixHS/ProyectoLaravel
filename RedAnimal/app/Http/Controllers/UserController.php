<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Posteo;
use App\Comentario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Editar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
        {
            $this->middleware('auth');
        }

        public function edit(Request $request)
        {
          $user = Auth::user();

          $request->validate([
              'avatar' => 'image|mimes:jpeg,png,jpg,svg|max:4096',
              'name' => 'required',
              'email' => 'required',
          ]);
          $avatarName=Auth::user()->avatar;
          if ($request->avatar) {
            $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

            $request->avatar->storeAs('public',$avatarName);


          };
          $user->avatar = $avatarName;
          $user->name = $request->get('name');
          $user->email = $request->get('email');
          $user->save();

          return view('perfil');
        }

        public function update(User $user)
        {

        }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $editar
     * @return \Illuminate\Http\Response
     */
    public function show(Editar $editar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $editar
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $editar
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $editar
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
      $id=Auth::user()->id;
      DB::delete('delete from users where id = ?',[$id]);
      DB::delete('delete from comentarios where user_id = ?',[$id]);
      DB::delete('delete from posteos where user_id = ?',[$id]);

      return redirect()->route('home');
    }
}
