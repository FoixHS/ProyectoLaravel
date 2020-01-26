
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto</title>
    <link rel="stylesheet" href="/css/login/estilos.css">
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
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item active  ml-lg-auto mr-lg-5">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ¿Qué estás buscando?
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <span class="dropdown-item disable" href="#">A tu servicio..</span>
                  <a class="dropdown-item able" href="#">Paseadores</a>
                  <a class="dropdown-item able" href="#">Veterinarias</a>
                  <a class="dropdown-item able" href="#">Entrenadores</a>
                  <a class="dropdown-item able" href="#">Guias de crianza</a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-item disable" href="#">Red de cuidado..</span>
                  <a class="dropdown-item able" href="#">Refugios</a>
                  <a class="dropdown-item able" href="#">Cuidador en tránsito</a>
                </div>
                </li>
            </ul>
          </div>
        </nav>
    </div>

<main>
    <div class="container" id="container" style="
  height: 55vh">
        <div class="form-container sign-up-container">
          <form action="#">
            <h1>Create Account</h1>
            <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <button>Sign Up</button>
          </form>
        </div>
        <div class="form-container sign-in-container">
          <form class="login" method="POST" action="{{ route('login') }}">
            @csrf
              <h1>Inicia Sesion</h1>
                <div class="social-container">
                  <a href="#" class="social icon-facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="social icon-twitter"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#" class="social icon-instagram"><i class="fab fa-linkedin-in"></i></a>
                </div>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror

                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <div class="Recordarme form-check">
                           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                           <label class="form-check-label" for="remember">
                               {{ __('Recordarme') }}
                           </label>
                       </div>
                       @if (Route::has('password.request'))
                           <a class="btn btn-link" href="{{ route('password.request') }}">
                               {{ __('¿Olvidaste tu contraseña?') }}
                           </a>
                       @endif
                       <button type="submit">Iniciar Sesión</button>
                   </form>
                     <div class="overlay-container">
                         <div class="overlay">
                             <div class="overlay-panel overlay-left">
                               <h1>Bienvenido!</h1>
                               <p>Para seguir conectado, por favor inicia sesión con tus datos</p>
                               <button class="ghost" id="signIn">Sign In</button>
                             </div>
                             <div class="overlay-panel overlay-right">
                               <h1>Hola, Pet-amigo!</h1>
                               <p>Ingresa tus datos personales y comienza una aventura con nosotros</p>
                               <a href="../register"><button class="ghost" id="signUp">Registrate</button></a>
                             </div>
                         </div>
                     </div>
                  </div>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
