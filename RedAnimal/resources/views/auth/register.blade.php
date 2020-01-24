<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/registro/registro.css">
  <link rel="stylesheet" href="/css/registro/fontello/css/fontello.css"/>
  <title>Registrate</title>
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
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>
      </header>


<main>
    <div class="container" id="container" style="
  height: 90vh">
          <div class="form-container sign-in-container">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Registrate</h1>
                <div class="social-container">
                  <a href="#" class="social icon-facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="social icon-twitter"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#" class="social icon-instagram"><i class="fab fa-linkedin-in"></i></a>
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
