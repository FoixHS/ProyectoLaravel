<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/postear/estilos.css">
  <link rel="stylesheet" href="/css/login/fontello/css/fontello.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Subir Posteo</title>
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

<main>
    <div class="postear container" style="
  height: 90vh">

        <form class="postear" action="/agregarPosteo" method="post" form="postear" enctype="multipart/form-data">
          {{csrf_field()}}
          <select class="estado select-posteo" name="estado" id="estado" >
            <option value="" disable selected>¿En que situación te encontrás?</option>
            <option value="Perdido">Perdí a mi mascota</option>
            <option value="Encontrado">Encontré una mascota</option>
            <option value="En adopción">Quiero dar en adopción a una mascota</option>
          </select>
          @error('estado')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>

          <select class="tipo_animal select-posteo" name="tipo_animal" id="tipo_animal" >
            <option value="" disable selected>¿Qué animal es?</option>
            <option value="Gato">Gato</option>
            <option value="Perro">Perro</option>
            <option value="Otro">Otro</option>
          </select>
          @error('tipo_animal')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>

          <select class="select-posteo" name="provincia">
            <option value="Provincia" disable selected>Seleccione su provincia</option>
          </select>

          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <input type="hidden" name="user_email" value="{{Auth::user()->email}}">
          <br>
          <!--
          <select type="text" class="estado select-posteo" name="barrio" value="" placeholder="Barrio">
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
          @error('barrio')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>
          -->
          <input type="text" name="raza" value="" placeholder="Raza" >
          @error('raza')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>
          <input type="date" name="fecha" value="" placeholder="Fecha">
          @error('fecha')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>
          <input type="text" name="texto" value="" placeholder="Descripcion">
          @error('texto')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>
          <label for="img">Foto</label>
          <input type="file" name="img" value="" placeholder="Imagen" >
          @error('img')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>
          <button type="submit" name="button">Subir Posteo</button>
        </form>
      </div>
         </main>
         <footer>
      <div class="footer-container">
        <div class="left-col">
          <div class="social-medias">
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
            <input type="submit" class="btnn" value="Enviar">
          </form>
        </div>
      </div>
    </footer>

<script>

fetch("https://apis.datos.gob.ar/georef/api/provincias")
.then(function(rta){
  return rta.json();
})
.then(function(datos){
  var selectProvincias = document.querySelector('select[name=provincia]');
  for( var i =0;i < datos.provincias.length; i++){
      selectProvincias.innerHTML += "<option value='"+datos.provincias[i].id+"'>"+datos.provincias[i].nombre+"</option>";
  }
})
.catch(function(error){
  console.log(error);
});

</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
