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
      <header>
      <div class="header">
    <h2 href="home" class="logo">RED ANIMAL</h2>
    <a class="home" href="home"></a>
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
        <div class="carrousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/css/home/img/carro1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/css/home/img/carro2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/css/home/img/carro3.jpg" alt="Third slide">
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
          <form class="" action="" method="get">
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

          @forelse ($posteos ?? ''->sortBy('fecha') as $posteo)
         <div class="posteos">
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
                <a href="/posteo/{{$posteo->id}}">Ver más..</a>
            </div>
        </div>
    </div>
    @empty
    NO HAY POSTEOS DISPONIBLES
    @endforelse
    <br>


      </main>
      </div>

    </div>
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
          <h1>Nuestros Correos</h1>
          <div class="border"></div>
          <p>Ingresa tu email para recibir noticias e informacion.</p>
          <form action="" class="correo-form">
            <input type="text" class="txtb" placeholder="Ingresa tu email">
            <input type="submit" class="btn" value="Enviar">
          </form>
        </div>
      </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
