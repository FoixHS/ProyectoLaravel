<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\User;
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


          $user->name = $request->name;
          $user->email = $request->email;
          $user->save();

          return back();
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
    public function destroy(Editar $editar)
    {
        //
    }
}
