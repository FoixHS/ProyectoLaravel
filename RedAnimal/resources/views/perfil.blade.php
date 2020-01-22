<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/perfil/perfil.css">
  <link rel="stylesheet" href="fontello/css/fontello.css"/>
  <title>Mi Perfil</title>
</head>
<body>
  <header>
      <div class="logo">
        <a href="home">
          <img src="/css/perfil/img/logo2.png" alt="logo">
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
      </div>
  </header>

  <main>
    <div class="container">
      <div class="container-top">
          <div class="avatar">
            <img src="/storage/{{Auth::user()->avatar}}" alt="Foto de perfil">
          </div>
          <h1>{{Auth::user()->name}}</h1>
          <br>
          <h2>{{Auth::user()->email}}</h2>
        </div>

        <div class="container-bot">
          <!--<button type="button" id="postear" name="button">
          <a href="{{ route('agregarPosteo') }}">Subir posteo</a></button>
<br>!-->
          <button type="button" id="editar-perfil" name="button">
          <a href="{{ route('editar') }}">Editar Perfil</a></button>

          <button type="button" id="Logout" name="button">
          <a href="{{ route('logout') }}">Cerrar Sesion</a></button>

            <form class="" action="delete" method="post">
            {{csrf_field()}}
              <button type="submit" name="button">Borrar perfil</button>
            </form>
            <br>



      </div>
      </div>
    </main>



</body>
</html>
