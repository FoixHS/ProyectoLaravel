<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/registro/registro.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Registrate</title>
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
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item active  ml-lg-auto mr-lg-5">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ¿Qué estás buscando?
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <span class="dropdown-item disable" href="#">A tu servicio..</span>
                  <a target="_blank" class="dropdown-item able" href="https://www.facebook.com/notes/ro-carrizo/listado-de-asociaciones-y-refugios-de-la-provincia-de-buenos-aires/10152366543223954/">Refugios</a>
                  <a target="_blank" class="dropdown-item able" href="https://www.paseaperros.com.ar/paseadores/buenos-aires">Paseadores</a>
                  <a target="_blank" class="dropdown-item able" href="https://www.buenosaires.gob.ar/agenciaambiental/mascotas/atenciones-veterinarias-gratuitas">Veterinarias</a>
                </div>
                </li>
            </ul>
          </div>
        </nav>
    </div>

<main>
    <div class="container" id="container" style="
  height: 55vh">
          <div class="form-container sign-in-container">
              <form class="registro" method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Registrate</h1>
                <div class="social-container">
                  <a href="https://www.facebook.com/Red-Animal-100121648220121/"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://twitter.com/RedAnimal2020"><i class="fab fa-twitter"></i></a>
                  <a href="mailto:Redanimal2020@gmail.com"><i class="fas fa-envelope-square"></i></a>
                </div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--input y error apellido-->

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repita contraseña">

                    <!--input y error avatar-->

                    <br>
                    <br>
                    <button type="submit">Registrate</button>
                </form>
              </div>
              <div class="overlay-container">
                  <div class="overlay">
                        <div class="overlay-panel overlay-right">
                            <h1>Bienvenido!</h1>
                            <p>Para seguir conectado, por favor inicia sesión con tus datos</p>
                            <a href="../login"><button class="ghost" id="signUp">Inicia Sesión </button></a>
                        </div>
                  </div>
              </div>
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
