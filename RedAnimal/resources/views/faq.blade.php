<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preguntas Frecuentes</title>
    <link rel="stylesheet" href="/css/faq/faq.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
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
      <h2 class="titulo">Preguntas Frecuentes</h2>
      <section>
          <div class="container">
              <div class="acordeon">
                  <div class="item-acordeon" id="pregunta1">
                      <a class="link-acordeon" href="#pregunta1">
                        ¿Quiénes somos?
                          <i class="icon ion-md-add"></i>
                          <i class="icon ion-md-remove"></i>
                      </a>
                      <div class="respuesta">
                        <p>
                            Somos un grupo de estudiantes de programación web que quiso crear una herramienta para todos los amantes de los animales y que de esta forma se les pueda facilitar la crianza de sus mascotas.
                        </p>
                      </div>
                  </div>

                  <div class="item-acordeon" id="pregunta2">
                    <a class="link-acordeon" href="#pregunta2">
                        ¿Que proponemos?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="respuesta">
                         <p>
                            Mediante el aporte de la comunidad de criadores expertos, veterinarios y los mismos usuarios, nutrir esta pagina de forma tal que se puedan tanto como: postear perros buscados, encontrados o en adopcion, tener un seguimiento de guias de crianza, encontrar refugios, veterinarias y paseadores segun la zona que elijas y más...
                        </p>
                    </div>
                </div>

                <div class="item-acordeon" id="pregunta3">
                    <a class="link-acordeon" href="#pregunta3">
                        Encontré una mascota y no puedo tenerla en casa
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="respuesta">
                        <p>
                            Contactate con nosotros y buscaremos un hogar de tránsito para ellos!
                        </p>
                    </div>
                </div>

                <div class="item-acordeon" id="pregunta4">
                    <a class="link-acordeon" href="#pregunta4">
                        ¿Puedo tener un perro y un gato en casa?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="respuesta">
                        <p>
                            Si son cachorros será más fácil que se acepten el uno al otro. Si uno de ellos es mucho mayor y lleva tiempo en casa, querrá dejar claro cual es su territorio, por lo que debes ayudarles en este aspecto, que cada uno tenga claro cuáles son sus límites de espacio. No fuerces el contacto, que fluya de forma natural. Echa una mano al perro con el refuerzo positivo, el gato se acercará por sí solo si cree que no hay amenaza.
                        </p>
                    </div>
                </div>

                <div class="item-acordeon" id="pregunta5">
                    <a class="link-acordeon" href="#pregunta5">
                        Puedo sacar a pasear la mascota que estoy cuidando?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="respuesta">
                        <p>
                            La respuesta de muchos veterinarios es que hasta que un cachorro no tenga todas las vacunas, no se debe sacar de paseo.
                        </p>
                    </div>
                </div>

                <div class="item-acordeon" id="pregunta6">
                    <a class="link-acordeon" href="#pregunta6">
                        ¿Por qué no va la mascota directamente en Adopción?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="respuesta">
                        <p>
                            El tránsito es un tiempo necesario para que los Organismos intervinientes implementen las estrategias para que la mascota pueda volver con su familia de origen o familia ampliada, o bien -en el caso de no poder revertirse la situación de riesgo- declarar al animal en situación de adoptabilidad, y así elegir una nueva familia para él o ella.
                        </p>
                    </div>
                </div>


                <div class="item-acordeon" id="pregunta7">
                    <a class="link-acordeon" href="#pregunta7">
                        ¿Se recibe algún pago o beneficio material por alojar una mascota?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="respuesta">
                        <p>
                            No. La incorporación al Programa es absolutamente voluntario.
                        </p>
                    </div>
                </div>

                <div class="item-acordeon" id="pregunta8">
                    <a class="link-acordeon" href="#pregunta8">
                        ¿Que hay que hacer para inscribirse como casa transitoria?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="respuesta">
                        <p>
                            Para ser una familia transitoria hay que contactarse en primera instancia con nosotros para inciar un proceso de dos etapas de evaluación: personal y ecónomico, y estado de vivienda.
                        </p>
                    </div>
                </div>
                <div class="item-acordeon" id="pregunta9">
                    <a class="link-acordeon" href="#pregunta9">
                        ¿Reciben cualquier tipo de animal?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="respuesta">
                        <p>
                           Por el momento solo recibimos animales de compañía que son tenidos como mascotas, como perros, gatos, conejos, hámsters, entre otros.
                        </p>
                    </div>
                </div>
                <div class="item-acordeon" id="pregunta10">
                    <a class="link-acordeon" href="#pregunta10">
                        ¿Cómo es el proceso de adopción?
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="respuesta">
                        <p>
                            Lea todo lo necesario sobre el proceso de adopción en nuestra página "Proceso de Adopción"
                        </p>
                    </div>
                </div>
              </div>
          </div>
      </section>
  </body>
</html>
