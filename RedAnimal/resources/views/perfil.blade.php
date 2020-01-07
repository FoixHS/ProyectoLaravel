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
          <div class="avatar">
            <img src="/storage/{{ $user->avatar }}" alt="Foto de perfil" style="width:200px;">
          </div>
          <h1>Nombre: {{Auth::user()->name}}</h1>
          <br>
          <h1>Email: {{Auth::user()->email}}</h1>
<br>

          <button type="button" id="postear" name="button">
          <a href="{{ route('agregarPosteo') }}">Subir posteo</a></button>
<br>
          <button type="button" id="editar-perfil" name="button">
          <a href="{{ route('editar') }}">Editar Perfil</a></button>
<br>
          <button type="button" id="Logout" name="button">
          <a href="{{ route('logout') }}">Cerrar Sesion</a></button>
<br>
<br><br><br>
          <form action="/perfil" method="post" enctype="multipart/form-data">
               @csrf
               <label for="img">Editar foto de perfil</label><br>
                   <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                   <br><br>
               <button type="submit" name="button" class="btn btn-primary">Subir Foto</button>
               <br><br>
           </form>



      </div>
    </main>



</body>
</html>
