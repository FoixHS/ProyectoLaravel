<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/perfil/editar.css">
  <link rel="stylesheet" href="fontello/css/fontello.css"/>
  <title>Inicia Sesión</title>
</head>
<body>
  <header>
      <div class="logo">
        <a href="home">
          <img src="css/perfil/img/logo2.png" alt="logo">
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
      <div class="container">
                <h1>Editar Perfil</h1>
                <div class="avatar">
                  <img src="../avatar/" alt="Foto de perfil" style="width:200px;">
                </div>

            <form method="post" action="">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                    <div class="social-container">
                      <a href="#" class="social icon-facebook"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social icon-twitter"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#" class="social icon-instagram"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <h4>Nombre:</h4><input type="text" name="name"  value="{{Auth::user()->name}}" />
<br>
                    <h4>Email:</h4><input type="email" name="email"  value="{{Auth::user()->email}}" />
<br>
                        <button type="submit">Send</button>
          </form>

      </div>
    </main>



</body>
</html>
