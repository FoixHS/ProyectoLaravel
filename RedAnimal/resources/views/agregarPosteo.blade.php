<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/postear/estilos.css">
  <link rel="stylesheet" href="/css/login/fontello/css/fontello.css"/>
  <title>Subir Posteo</title>
</head>

<header>
    <div class="logo">
      <a href="home">
        <img src="/css/login/img/logo2.png" alt="logo">
      </a>
    </div>
    
    <div class="preguntas">
      <a href="faq">Preguntas Frecuentes</a>
    </div>
    <div class="login">
      <div class="links">
        <a href="../perfil">Mi Perfil: {{Auth::user()->name}}</a>
      </div>

    </div>
    </div>
</header>

<main>
    <div class="postear container" style="
  height: 70vh">

        <form class="" action="/agregarPosteo" method="post" form="postear" enctype="multipart/form-data">
          {{csrf_field()}}
          <select class="estado select-posteo" name="estado" id="estado">
            <option value="" disable selected>¿En qué estado se encuentra la mascota?</option>
            <option value="Perdido">Perdida</option>
            <option value="Encontrado">Encontrada</option>
            <option value="En adopción">En adopción</option>
          </select>
          <br>

          <select class="tipo_animal select-posteo" name="tipo_animal" id="tipo_animal">
            <option value="" disable selected>Que animal es?</option>
            <option value="Gato">Gato</option>
            <option value="Perro">Perro</option>
            <option value="Otro">Otro</option>
          </select>

          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <input type="hidden" name="user_email" value="{{Auth::user()->email}}">
          <br>
          <input type="text" name="barrio" value="" placeholder="Barrio">
          <br>
          <input type="text" name="raza" value="" placeholder="Raza">
          <br>
          <input type="date" name="fecha" value="" placeholder="Fecha">
          <br>
          <input type="text" name="texto" value="" placeholder="Descripcion">
          <br>
          <label for="img">Foto</label>
          <input type="file" name="img" value="" placeholder="Imagen">
          <br>
          <button type="submit" name="button">Subir Posteo</button>
        </form>
      </div>


         </main>
