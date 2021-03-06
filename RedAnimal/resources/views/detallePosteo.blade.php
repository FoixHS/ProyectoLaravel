<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/detalle/detalle.css">
  <link rel="stylesheet" href="/css/login/fontello/css/fontello.css"/>
  <title>Detalle del posteo</title>
</head>

<header>
      <div class="header">
    <h2 class="logo">RED ANIMAL</h2>
    <a href="home"></a>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
      <i class="fas fa-ellipsis-h"></i>
    </label>

    <ul class="menu">
      <a href="#">Refugios</a>
      <a href="#">Servicios</a>
      <a href="#">Transito</a>
      <a href="faq">FAQ</a>
      <a href="../perfil">Mi Perfil: {{Auth::user()->name}}</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>
      </header>
<body>


<main>

  <div class="detalle-posteo container">
    <div class="descripcion">
     <div class="foto-posteo">
         <img style="height: 18vh; width: 17vw" src=" /storage/{{$posteo->img}} " alt=" {{$posteo->raza}} {{$posteo->id}} ">
     </div>
   <div class="estado {{$posteo->estado}} ">
     <h3> {{$posteo->estado}} </h3>
 </div>
     <div class="detalles">
         <p><strong>Animal:</strong> {{$posteo->tipo_animal}} </p>
         <p><strong>Raza:</strong> {{$posteo->raza}} </p>
         <p><strong>Zona:</strong> {{$posteo->barrio}} </p>
         <p><strong>Fecha:</strong> {{$posteo->fecha}} </p>
         <p><strong>Descripción:</strong> {{$posteo->texto}} </p>
     </div>
 </div>
</div>
<div class="comentarios">
  @forelse ($comentarios as $comentario)
  <div class="comentario">
      <span>{{$comentario->texto}}</span>
      <span id="email">{{$comentario->user_email}}</span>

  </div>
@empty
<h2>No hay comentarios disponibles</h2>
@endforelse
</div>
<br>
<div class="comentar">

  <form class="" action="/postear" method="post" form="comentar" enctype="multipart/form-data">
    {{csrf_field()}}
      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
      <input type="hidden" name="user_email" value="{{Auth::user()->email}}">
        <input type="hidden" name="posteo_id" value="{{$posteo->id}}">
  <textarea name="texto" rows="8" cols="80" placeholder="Deja aquí tu comentario"></textarea>
  <button type="submit" name="button">Comentar</button>
  </form>
</div>

</main>
</body>
