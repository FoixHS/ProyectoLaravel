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
    <div class="logo">
      <a href="/home">
        <img src="/css/login/img/logo2.png" alt="logo">
      </a>
    </div>
    <div class="buscador">
      <select name="Barrio">
          <option value="Barrio"disabled selected>-Selecciona tu barrio-</option>
          <option value="Almagro">Almagro</option>
          <option value="Balvanera">Balvanera</option>
          <option value="Belgrano">Belgrano</option>
          <option value="Colegiales">Colegiales</option>
          <option value="Chacarita">Chacarita</option>
          <option value="Coghlan">Coghlan</option>
          <option value="Caballito">Caballito</option>
          <option value="Flores">Flores</option>
          <option value="Nueva Pompeya">Nueva Pompeya</option>
          <option value="Palermo">Palermo</option>
          <option value="San Telmo">San Telmo</option>
          <option value="Versalles">Versalles</option>
          <option value="Villa Luro">Villa Luro</option>
      </select>
    </div>
    <div class="preguntas">
      <a href="faq">Preguntas Frecuentes</a>
    </div>
    <div class="login">
      <div class="links">
        <a href="../perfil">Mi Perfil: {{Auth::user()->name}}</a>
      </div>

    </div>
</header>

<main>

  <div class="detalle-posteo">
    <div class="descripcion">
     <div class="foto-posteo">
         <img style="height: 18vh; width: 17vw" src=" /storage/{{$posteo->img}} " alt=" {{$posteo->raza}} {{$posteo->id}} ">
     </div>
   <div class="estado {{$posteo->estado}} ">
     <h3> {{$posteo->estado}} </h3>
 </div>
     <div class="detalles">
         <p><strong>Raza:</strong> {{$posteo->raza}} </p>
         <p><strong>Zona:</strong> {{$posteo->barrio}} </p>
         <p><strong>Fecha:</strong> {{$posteo->fecha}} </p>
         <p><strong>Descripción:</strong> {{$posteo->texto}} </p>
     </div>
 </div>
</div>
<div class="comentarios">
  @forelse ($comentarios as $comentario)
  <h6>{{Auth::user()->name}}</h6>
  <p>{{$comentario->texto}}</p>
@empty
No hay comentarios disponibles
@endforelse
</div>
<div class="comentar">
  {{csrf_field()}}
  <form class="" action="/posteo/{id}" method="post" form="comentar" enctype="multipart/form-data">
  <textarea name="comantar" rows="8" cols="80" placeholder="Deja aquí tu comentario"></textarea>
  <button type="submit" name="button">Comentar</button>
  </form>
</div>

 </main>
