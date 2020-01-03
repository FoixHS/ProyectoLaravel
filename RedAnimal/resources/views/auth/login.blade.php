
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/login/estilos.css">
  <link rel="stylesheet" href="/css/login/fontello/css/fontello.css"/>
  <title>Inicia Sesión</title>
</head>

<header>
    <div class="logo">
      <a href="home">
        <img src="/css/login/img/logo2.png" alt="logo">
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
      <a href="faq">Preguntas Frecuentes</a>
    </div>
    </div>
</header>

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
          <form method="POST" action="{{ route('login') }}">
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
