<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto</title>
    <link rel="stylesheet" href="/css/home/style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5d9b9802b3.js" crossorigin="anonymous"></script>
  </head>
  <body>
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
                <a class="nav-link separar1" href='/home?filtro=adopt&button='><span>Adoptar</span>!</a>
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
        <main>
        <div class="carrousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/css/home/img/carro4.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/css/home/img/carro2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/css/home/img/carro1.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <br>
          <form class="filtros" action="" method="get">
                <div class="filtro">
                    <div>
                        <input id="encontrado" type="radio" name="filtro" value="encon"><span class="filtros"><label for="encontrado">Encontrados</label></span>
                    </div>
                    <div>
                        <input id="perdido" type="radio" name="filtro" value="perd"><span class="filtros"><label for="perdido">Perdidos</label></span>
                    </div>
                    <div>
                        <input id="adopcion" type="radio" name="filtro" value="adopt"><span class="filtros"><label for="adopcion">Adopción</label></span>
                    </div>
                    <div>
                        <input id="Todos" type="radio" name="filtro" value="todos"><span class="filtros"><label for="Todos">Todos</label></span>
                    </div>
                    <div>
                      <button type="submit" name="button">Filtrar</button>
                    </div>
              </div>
        </form>
        <button type="button" id="postear" name="button">
          <a href="{{ route('agregarPosteo') }}">Nueva Publicación</a></button>
            <div class="pag">
                {{$posteos ?? ''->links()}}
            </div>
<br>

<main>
  <div class="container">
@forelse ($posteos ?? ''->sortBy('fecha') as $posteo)
  <div class="posteo">

    <div class="foto-posteo">
        <img src=" /storage/{{$posteo->img}} " alt=" {{$posteo->raza}} {{$posteo->id}} ">
    </div>
    <div class="estado-posteo" id="{{$posteo->estado}}">
      <span class="estados"> {{$posteo->estado}}</span>
    </div>
    <div class="descripcion">
    <div class="item">
        <span class="type">Animal:</span>
        <span class="word">{{$posteo->tipo_animal}}</span>
    </div>
    <div class="item">
        <span class="type">Raza:</span>
        <span class="word">{{$posteo->raza}}</span>
    </div>
    <div class="item">
        <span class="type">Provincia:</span>
        <span class="word">{{$posteo->provincia}}</span>
    </div>
    <div class="item">
        <span class="type">Fecha:</span>
        <span class="word">{{$posteo->fecha}}</span>
    </div>
    <br>
    <div class="item">
      <h3>Descripción:</h3>
      <p>{{substr($posteo->texto, 0, 60)}} </p>
      <a href="/posteo/{{$posteo->id}}" class="morebtn">Ver más</a>
    </div>
    </div>

</div>

  @empty
      NO HAY POSTEOS DISPONIBLES
      @endforelse


</main>

    <footer>
      <div class="footer-container">
        <div class="left-col">
          <div class="social-medias">
            <a href="https://www.facebook.com/Red-Animal-100121648220121/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/RedAnimal2020"><i class="fab fa-twitter"></i></a>
            <a href="mailto:Redanimal2020@gmail.com"><i class="fas fa-envelope-square"></i></a>
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
