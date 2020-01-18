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
    </div>
</header>

<main>
    <div class="postear">

        <form class="" action="/agregarPosteo" method="post" form="postear" enctype="multipart/form-data">
          {{csrf_field()}}
          <select class="estado" name="estado" id="estado">
            <option value="" disable selected>¿En qué estado se encuentra la mascota?</option>
            <option value="Perdido">Perdida</option>
            <option value="Encontrado">Encontrada</option>
            <option value="En adopción">En adopción</option>
          </select>
          <br>

          <select class="tipo_animal" name="tipo_animal" id="tipo_animal">
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
