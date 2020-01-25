<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/perfil/editar.css">
  <link rel="stylesheet" href="fontello/css/fontello.css"/>
  <title>Editar mi perfil</title>
</head>
<body>
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
      <div class="container">
                <h1>Editar Perfil</h1>
                <div class="avatar">
                  <img src="/storage/{{Auth::user()->avatar}}" alt="Foto de perfil" style="width:200px;">
                </div>

            <form method="post" action=""  enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="social-container">
                      <a href="#" class="social icon-facebook"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social icon-twitter"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#" class="social icon-instagram"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <h4>Nombre:</h4><input type="text" name="name"  value="{{Auth::user()->name}}" class="form-control @error('name') is-invalid @enderror"  />

                    @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong style="color:red">{{ $message }}</strong>
                      </span>
                    @enderror
<br>
                    <h4>Email:</h4><input type="email" name="email"  value="{{Auth::user()->email}}" class="form-control @error('email') is-invalid @enderror"  />
<br>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong style="color:red">{{ $message }}</strong>
                      </span>
                    @enderror
                    <h4>Foto de Perfil:</h4> <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">

                    @error('avatar')
                      <span class="invalid-feedback" role="alert">
                          <strong style="color:red">{{ $message }}</strong>
                      </span>
                    @enderror
                    <br>
                        <button type="submit">Editar</button>
          </form>

      </div>
    </main>



</body>
</html>
