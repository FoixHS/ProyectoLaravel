<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/detalle/detalle.css">
  <link rel="stylesheet" href="/css/login/fontello/css/fontello.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Detalle del posteo</title>
</head>

<div class="content">
        <nav class="navbar navbar-expand-lg navbar-dark color">
        <a class="navbar-brand" href="home">
        <img class="logo" src="/css/home/img/logo2.png" width="70" height="60" class="d-inline-block align-top" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="izquierda navbar-nav mr-lg-auto">
              <li class="nav-item active ml-lg-auto">
                <a class="nav-link separar1" href="#"><span>Adoptar</span>!</a>
              </li>
              <li class="nav-item">
                <a class="nav-link separar2" href="faq"><span>Preguntas Frecuentes</span></a>
              </li>
            </ul>
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item active  ml-lg-auto mr-lg-5">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{Auth::user()->name}}
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <span class="dropdown-item disable" href="#">Perfil</span>
                  <a class="dropdown-item able" href="../perfil">Mi Perfil</a>
                  <a class="dropdown-item able" href="{{ route('editar') }}">Editar Perfil</a>
                  <a class="dropdown-item able" href="{{ route('logout') }}">Cerrar sesión</a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-item disable" href="#">Red de cuidado</span>
                  <a class="dropdown-item able" href="#">Refugios</a>
                  <a class="dropdown-item able" href="#">Cuidador en tránsito</a>
                  <a class="dropdown-item able" href="#">Paseadores</a>
                  <a class="dropdown-item able" href="#">Veterinarias</a>
                  <a class="dropdown-item able" href="#">Entrenadores</a>
                  <a class="dropdown-item able" href="#">Guias de crianza</a>
                </div>
                </li>
            </ul>
          </div>
        </nav>
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
<footer>
      <div class="footer-container">
        <div class="left-col">
          <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p class="rights-text">© 2020 Creado por Alumnos Digital House Todos los derechos se reservan.</p>
        </div>

        <div class="right-col">
          <h1 class="footh1">Nuestros Correos</h1>
          <div class="border"></div>
          <p>Ingresa tu email para recibir noticias e informacion.</p>
          <form action="" class="correo-form">
            <input type="text" class="txtb" placeholder="Ingresa tu email">
            <input type="submit" class="btnn" value="Enviar">
          </form>
        </div>
      </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
