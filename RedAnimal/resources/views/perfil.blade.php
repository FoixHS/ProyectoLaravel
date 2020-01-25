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
      <div class="header">
    <h2 class="logo">RED ANIMAL</h2>
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
