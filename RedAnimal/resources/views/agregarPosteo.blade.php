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
      <div class="header">
    <h2 class="logo">RED ANIMAL</h2>
    <a href="home"></a>
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
    <div class="postear container" style="
  height: 90vh">

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
