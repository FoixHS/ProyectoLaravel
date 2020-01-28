<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/postear/estilos.css">
  <link rel="stylesheet" href="/css/login/fontello/css/fontello.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5d9b9802b3.js" crossorigin="anonymous"></script>
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
                <a class="nav-link separar1" href='/home?filtro=adopt&button='><span>Adoptar</span>!</a>
              </li>
              <li class="nav-item">
                <a class="nav-link separar2" href="faq"><span>Preguntas Frecuentes</span></a>
              </li>
            </ul>
            <ul style="margin-right: 95px;" class="navbar-nav ml-lg-auto">
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
                  <a target="_blank" class="dropdown-item able" href="https://www.facebook.com/notes/ro-carrizo/listado-de-asociaciones-y-refugios-de-la-provincia-de-buenos-aires/10152366543223954/">Refugios</a>
                  <a target="_blank" class="dropdown-item able" href="https://www.paseaperros.com.ar/paseadores/buenos-aires">Paseadores</a>
                  <a target="_blank" class="dropdown-item able" href="https://www.buenosaires.gob.ar/agenciaambiental/mascotas/atenciones-veterinarias-gratuitas">Veterinarias</a>
                </div>
                </li>
            </ul>
          </div>
        </nav>
    </div>
</header>

<main>
    <div class="postear container">
        <form class="postear" action="/agregarPosteo" method="post" form="postear" enctype="multipart/form-data">
          {{csrf_field()}}

          <select class="estado select-posteo form-control @error('estado') is-invalid @enderror" name="estado" id="estado" >
            <option value="" disable selected>¿En que situación te encontrás?</option>
            <option value="Perdido"@if (old('estado') == 'Perdido') selected="selected" @endif>Perdí a mi mascota</option>
            <option value="Encontrado"@if (old('estado') == 'Encontrado') selected="selected" @endif>Encontré una mascota</option>
            <option value="En adopción"@if (old('estado') == 'En Adopción') selected="selected" @endif>Quiero dar en adopción a una mascota</option>
          </select>
          <span class="estado"></span>
          @error('estado')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>

          <select class="tipo_animal select-posteo form-control @error('tipo_animal') is-invalid @enderror" name="tipo_animal" id="tipo_animal" >
            <option value="" disable selected>¿Qué animal es?</option>
            <option value="Gato"  @if (old('tipo_animal') == 'Gato') selected="selected" @endif>Gato</option>
            <option value="Perro"@if (old('tipo_animal') == 'Perro') selected="selected" @endif>Perro</option>
            <option value="Otro"@if (old('tipo_animal') == 'Otro') selected="selected" @endif>Otro</option>
          </select>
          <span class="tipo_animal"></span>
          @error('tipo_animal')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>

          <select class="provincia select-posteo form-control @error('provincia') is-invalid @enderror" name="provincia">
            <option value="" disable selected>Seleccione su provincia</option>
          </select>
          <span class="provincia"></span>
          @error('provincia')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror

          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <input type="hidden" name="user_email" value="{{Auth::user()->email}}">
          <br>

          <input class="raza form-control @error('raza') is-invalid @enderror" type="text" name="raza" value="{{ old('raza') }}" placeholder="Raza" >
          <span class="raza"></span>
          @error('raza')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>

          <input class="fecha form-control @error('fecha') is-invalid @enderror" type="date" name="fecha" value="{{ old('fecha') }}" placeholder="Fecha">
          <span class="fecha"></span>
          @error('fecha')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>

          <input class="desc form-control @error('texto') is-invalid @enderror" type="text" name="texto" value="{{ old('texto') }}" placeholder="Descripcion">
          <span class="desc"></span>
          @error('texto')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>

          <label for="img">Foto</label>
          <input class="img form-control @error('img') is-invalid @enderror" type="file" name="img" value="{{ old('img') }}" placeholder="Imagen" >
          <span class="img"></span>
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
                 <a target="_blank" href="https://www.facebook.com/Red-Animal-100121648220121/"><i class="fab fa-facebook-f"></i></a>
                 <a target="_blank" href="https://twitter.com/RedAnimal2020"><i class="fab fa-twitter"></i></a>
                 <a href="mailto:Redanimal2020@gmail.com"><i class="fas fa-envelope-square"></i></a>
               </div>
               <p class="rights-text">© 2020 Creado por Alumnos Digital House Todos los derechos se reservan.</p>
             </div>
             <div class="right-col">
               <h1 class="footh1">Nuestros Correos</h1>
               <div class="border"></div>
               <p>Ingresa tu email para recibir noticias e informacion.</p>
               <form action="" class="correo-form">
                 <input type="email" class="txtb" placeholder="Ingresa tu email">
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
      selectProvincias.innerHTML += "<option value='"+datos.provincias[i].nombre+"'>"+datos.provincias[i].nombre+"</option>";
  }
})
.catch(function(error){
  console.log(error);
});

</script>

<script>

var elFormulario = document.querySelector('form.postear');

var errores = 0;

var estado = document.querySelector('select.estado');
var spanEstado = document.querySelector('span.estado');

var tipoAnimal = document.querySelector('select.tipo_animal');
var spanTipoAnimal = document.querySelector('span.tipo_animal');

var provincia = document.querySelector('select.provincia');
var spanProvincia = document.querySelector('span.provincia');

var raza = document.querySelector('input.raza');
var spanRaza = document.querySelector('span.raza');

var fecha = document.querySelector('input.fecha');
var spanFecha = document.querySelector('span.fecha');

var desc = document.querySelector('input.desc');
var spanDesc = document.querySelector('span.desc');

var img = document.querySelector('input.img');
var spanImg = document.querySelector('span.img');

elFormulario.onsubmit = function(event){
  if(estado.value == ""){
    errores++;
    event.preventDefault();
    spanEstado.innerHTML = "Por favor elija una opción";
    estado.style.borderColor = "red";
    spanEstado.style.color = "red";
    spanEstado.style.fontSize = "10px";
  }else{
    spanEstado.innerHTML = "";
    estado.style.borderColor = "green";
  }
  if(tipoAnimal.value == ""){
    errores++;
    event.preventDefault();
    spanTipoAnimal.innerHTML = "Por favor elija una opción";
    tipoAnimal.style.borderColor = "red";
    spanTipoAnimal.style.color = "red";
    spanTipoAnimal.style.fontSize = "10px";
  }else{
    spanTipoAnimal.innerHTML = "";
    tipoAnimal.style.borderColor = "green";
  }
  if(provincia.value == ""){
    errores++;
    event.preventDefault();
    spanProvincia.innerHTML = "Por favor elija una opción";
    provincia.style.borderColor = "red";
    spanProvincia.style.color = "red";
    spanProvincia.style.fontSize = "10px";
  }else{
    spanProvincia.innerHTML = "";
    provincia.style.borderColor = "green";
  }
  if(raza.value == ""){
    errores++;
    event.preventDefault();
    spanRaza.innerHTML = "El campo Raza es obligatorio";
    raza.style.borderColor = "red";
    spanRaza.style.color = "red";
    spanRaza.style.fontSize = "10px";
  }else{
    spanRaza.innerHTML = "";
    raza.style.borderColor = "green";
  }
  if(fecha.value == ""){
    errores++;
    event.preventDefault();
    spanFecha.innerHTML = "El campo Fecha es obligatorio";
    fecha.style.borderColor = "red";
    spanFecha.style.color = "red";
    spanFecha.style.fontSize = "10px";
  }else{
    spanFecha.innerHTML = "";
    fecha.style.borderColor = "green";
  }
  if(desc.value == ""){
    errores++;
    event.preventDefault();
    spanDesc.innerHTML = "El campo Descripción es obligatorio";
    desc.style.borderColor = "red";
    spanDesc.style.color = "red";
    spanDesc.style.fontSize = "10px";
  }else{
    spanDesc.innerHTML = "";
    desc.style.borderColor = "green";
  }
  if(img.value == ""){
    errores++;
    event.preventDefault();
    spanImg.innerHTML = "El campo Foto es obligatorio";
    img.style.borderColor = "red";
    spanImg.style.color = "red";
    spanImg.style.fontSize = "10px";
  }else{
    spanImg.innerHTML = "";
    img.style.borderColor = "green";
  }

  if(!errores){
      submit();
  }
}

</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
