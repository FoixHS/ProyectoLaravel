
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
          <div class="logo">
            <a href="home">
              <img src="/css/home/img/logo2.png" alt="logo">
            </a>
          </div>
          <div class="buscador">
            <select name="Barrio">
                <option value="Barrio"disabled selected>-Barrio-</option>
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
          <!--<h3>¡Todo lo que necesitas saber sobre tu mascota!</h3>-->
        </div>
    </div>

    <div class="sidebar">
      <div>
        <nav>
          <h3>¿Qué estas buscando?</h3>
          <ul>
            <li><a href="#">Perdidos / Encontrados</a></li><br>
            <li><a href="#">Adoptar</a></li><br>
            <li><a href="#">Cuidador en Transito</a></li><br>
            <li><a href="#">Paseadores</a></li><br>
            <li><a href="#">Veterinarias</a></li><br>
            <li><a href="#">Refugios</a></li><br>
            <li><a href="#">Servicios</a></li><br>
            <li><a href="#">Contactanos</a></li><br>
          </ul>
        </nav>
      </div>
    </div>

          <div class="filtro">
            <div>
              <input id="encontrado" type="checkbox" name="filtro" value=""><span class="filtros"><label for="encontrado">Encontrados</label></span>
            </div>
            <div>
              <input id="perdido" type="checkbox" name="filtro" value=""><span class="filtros"><label for="perdido">Perdidos</label></span>
            </div>
            <div>
              <input id="adopcion" type="checkbox" name="filtro" value=""><span class="filtros"><label for="adopcion">En adopcion</label></span>
          </div>
          <div>
            <button type="submit" name="button">Filtrar</button>
        </div>
        </div>

        <main>
          @forelse ($posteos->sortBy('fecha') as $posteo)

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

      </main>

        <aside>
          <h4>Lista de Adopcion:</h4>
          <div class="adopcion">
            <img src="img/perro1.jpg" alt="Perro1">
            <br>
            <h6>Detalles</h6>
          </div>
          <div class="adopcion">
            <img src="img/perro1.jpg" alt="Perro1">
            <br>
            <h6>Detalles</h6>
          </div>
          <div class="adopcion">
            <img src="img/perro1.jpg" alt="Perro1">
            <br>
            <h6>Detalles</h6>
          </div>
          <div class="adopcion">
            <img src="img/perro1.jpg" alt="Perro1">
            <br>
            <h6>Detalles</h6>
          </div>
        </aside>


      </div>

    </div>
    <footer>
      <h1>COPYRIGHT 2019</h1>
    </footer>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
