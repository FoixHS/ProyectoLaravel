<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/faq', 'FaqController@index')->name('preguntasfrecuentes')->middleware('auth');

//Route::get('/perfil', 'PerfilController@index')->name('perfil');
Route::get('perfil', 'usuariosController@profile');

Route::post('perfil', 'usuariosController@actualizarFoto');



Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/login');
})->name('logout');

Route::get('/editar', 'UserController@index')->name('editar')->middleware('auth');
Route::post('/editar', 'UserController@index')->name('editar')->middleware('auth');

Route::get('/posteo/{id}', 'PosteosController@detalle')->name('detalle')->middleware('auth');
Route::get('/posteo/{id}', 'ComentariosController@mostrar')->name('detalle')->middleware('auth');
Route::post('/posteo/{id}', 'ComentariosController@comentar')->name('detalle')->middleware('auth');

Route::get("/agregarPosteo", function(){
  return view('/agregarPosteo');
})->middleware('auth');

Route::post("/agregarPosteo", "PosteosController@agregar")->name('agregarPosteo')->middleware('auth');
