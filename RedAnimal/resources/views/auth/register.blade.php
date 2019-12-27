<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/registro/registro.css">
  <link rel="stylesheet" href="/css/registro/fontello/css/fontello.css"/>
  <title>Registrate</title>
</head>

<header>
    <div class="logo">
      <a href="../home/index.php">
        <img src="/css/registro/img/logo2.png" alt="logo">
      </a>
    </div>
    <div class="buscador">
      <select name="Barrio">
          <option value="Barrio"disabled selected>-Selecciona tu barrio-</option>
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
      <a href="../faq/faq.php">Preguntas Frecuentes</a>
    </div>
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
                            <a href="../login/login.php"><button class="ghost" id="signUp">Inicia Sesión </button></a>
                        </div>
                  </div>
              </div>
        </div>
      </main>
