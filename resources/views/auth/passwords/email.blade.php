@extends('layouts.app')
@section('content')

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto</title>
    <link rel="stylesheet" href="/css/home/forgot.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5d9b9802b3.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-dark color">
        <a class="navbar-brand" href="../home">
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
</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nueva contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar nueva contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
  </body>
</html>

@endsection