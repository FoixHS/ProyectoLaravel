<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/perfil/perfil.css">
  <link rel="stylesheet" href="fontello/css/fontello.css"/>
  <title>Inicia Sesión</title>
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
          <div class="avatar">
            <img src="../avatar/{{ $usuario ?? '' }}" alt="Foto de perfil" style="width:200px;">
          </div>
          <h1>Nombre: {{Auth::user()->name}}</h1>
          <h1>Email: {{Auth::user()->email}}</h1>
          <form class="" id="editar-perfil" action="../perfil/editarperfil.php" method="get">
            <button type="submit" name="button">Editar Perfil</button>
          </form>
          <form class="" id="nuevo-posteo" action="../Perfil/eliminar.php" method="post">
            <button type="submit" name="button">Eliminar perfil</button>
          </form>

          <button type="button" id="Logout" name="button">
          <a href="{{ route('logout') }}">Cerrar Sesion</a></button>
      </div>
    </main>



</body>
</html>
