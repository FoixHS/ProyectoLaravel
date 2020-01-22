<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/postear/estilos.css">
  <link rel="stylesheet" href="/css/login/fontello/css/fontello.css"/>
  <title>Subir Posteo</title>
</head>

<header>
    <div class="logo">
      <a href="home">
        <img src="/css/login/img/logo2.png" alt="logo">
      </a>
    </div>

    <div class="preguntas">
      <a href="faq">Preguntas Frecuentes</a>
    </div>
    <div class="login">
      <div class="links">
        <a href="../perfil">Mi Perfil: {{Auth::user()->name}}</a>
      </div>

    </div>
    </div>
</header>

<main>
    <div class="postear container" style="
  height: 70vh">

        <form class="" action="/agregarPosteo" method="post" form="postear" enctype="multipart/form-data">
          {{csrf_field()}}
          <select class="estado select-posteo" name="estado" id="estado" >
            <option value="" disable selected>¿En que situacion te encontras?</option>
            <option value="Perdido">Perdi a mi mascota</option>
            <option value="Encontrado">Encontre una mascota</option>
            <option value="En adopción">Quiero dar en adopcion a una mascota</option>
          </select>
          @error('estado')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>

          <select class="tipo_animal select-posteo" name="tipo_animal" id="tipo_animal" >
            <option value="" disable selected>Que animal es?</option>
            <option value="Gato">Gato</option>
            <option value="Perro">Perro</option>
            <option value="Otro">Otro</option>
          </select>
          @error('tipo_animal')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror

          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <input type="hidden" name="user_email" value="{{Auth::user()->email}}">
          <br>
          <input type="text" name="barrio" value="" placeholder="Barrio" >
          @error('barrio')
              <span class="invalid-feedback" role="alert">
                  <strong style="color:red">{{ $message }}</strong>
              </span>
          @enderror
          <br>
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
