<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PaNPaS</title>

    <!-- Bootstrap core CSS -->
    <link href="publico/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="publico/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="publico/css/agency.min.css" rel="stylesheet">


    <style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
  background-color: #364a4c;

}


.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: .65;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("publico/img/header-bg.jpg");
  height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 35%;
  width: 100%;
  text-align: center;
  color: white;
  z-index: 4;
}

.caption span.border {
  background-color: #111; /* color del fondo de las letras del titulo */
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
  opacity: 0.8;
  }

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

#services {
  background-color: white;
}
#portfolio {
  background-color: white;
}
#team {
  background-color: white;
}

.team-member img {
  border-color: black;
  border-width: 2px;
}
.icono{
  width: 50px;
  height: 50px;
}
.nav-login-registro{
  font-size: 1.4em;
}
.portfolio-item img {
  width: 400px;
  height: 300px;
}
.modal-body h2 {
  font-family: 'Kaushan Script';
}
.titulo {
  font-size: 5em;
  font-weight: bolder;
  text-shadow: 5px 10px 0px black;

}
.subtitulo {
  font-size: 2.5em;
  font-weight: bolder;
  text-shadow: 5px 10px 0px black;

}
.fa-script{
  font-family: 'Kaushan Script';
}

.loginRegistroModal{
  width: 20%;
  height: 50%;
  margin: auto;
  padding: 10px;

  min-width: 400px;
  max-width: 100%;

}


</style>


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PaNPaS</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
             <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Ranking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
            <li class="nav-item nav-login-registro">
              <a class="nav-link portfolio-link" data-toggle="modal" href="#loginModal">Login</a>
            </li>
            <li class="nav-item nav-login-registro">
              <a class="nav-link portfolio-link" data-toggle="modal" href="#registerModal">Registro</a>
            </li>


          </ul>
        </div>
      </div>
    </nav>



<div class="bgimg-1">
  <div class="caption">
    <span class="titulo fa-script">PaNPaS</span><br><br>
    <span class="subtitulo fa-script">Gestiona tu panadería con facilidad</span><br><br>
    <span class="subtitulo fa-script">Conserva y comparte tus recetas</span>
  </div>
</div>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Servicios</h2>
            <h3 class="section-subheading text-muted" style="font-family: 'Kaushan script'">Descubre qué podemos ofrecerte</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-cookie fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading fa-script">Gestiona tu Panadería</h4>
            <p class="text-muted">Facilita la gestión de tu negocio.<br>Organiza bien tu almacén</p>
          </div>
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading fa-script">Comparte Recetas</h4>
            <p class="text-muted">Crea recetas públicas para que las visualicen otros usuarios o privadas para tu uso personal. </p>
          </div>
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-star fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading fa-script">Vota</h4>
            <p class="text-muted">Valora las recetas de otros usuarios.<br>Las 3 más votadas tendrán un premio.</p>
          </div>
           <div class="col-md-3">
            <span class="fa-award fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fab fa-angellist fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading fa-script">Ranking</h4>
            <p class="text-muted"> Con las Votaciones habrá un ranking<br>¿Conseguirás llegar al primer puesto?</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Ranking</h2>
            <h3 class="section-subheading text-muted" style="font-family: 'Kaushan script'">Visualiza las recetas más destacadas</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="publico/img/recetas/bollosSuizos.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style=" font-family:'kaushan script'">Receta1</h4>
              <p class="text-muted">usuario3</p>
              <h4 style="font-family:'kaushan script'"><i class="fas fa-star fa-lg" style="color: rgb(250, 220, 0)"></i> 5 </h4>
            </div>
          </div>



          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="publico/img/recetas/madalenas.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style=" font-family:'kaushan script'">Receta2</h4>
              <p class="text-muted">usuario1</p>
              <h4 style="font-family:'kaushan script'"><i class="fas fa-star fa-lg" style="color: rgb(147, 147, 140)"></i> 3 </h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="publico/img/recetas/pan.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style=" font-family:'kaushan script'">Receta3</h4>
              <p class="text-muted">usuario3</p>
              <h4 style="font-family:'kaushan script'"><i class="fas fa-star fa-lg" style="color: rgb(147, 147, 140)"></i> 3 </h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="publico/img/recetas/panDeSemillas.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style=" font-family:'kaushan script'">Receta4</h4>
              <p class="text-muted">usuario1</p>
              <h4 style="font-family:'kaushan script'"><i class="fas fa-star fa-lg" style="color: rgb(168, 122, 67)"></i> 1 </h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="publico/img/recetas/panecillos.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style=" font-family:'kaushan script'">Receta5</h4>
              <p class="text-muted">usuario2</p>
              <h4 style="font-family:'kaushan script'"><i class="fas fa-star fa-lg" style="color: rgb(168, 122, 67)"></i> 1 </h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="publico/img/recetas/pastas.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style=" font-family:'kaushan script'">Receta6</h4>
              <p class="text-muted">usuario2</p>
              <h4 style="font-family:'kaushan script'"><i class="fas fa-star fa-lg" style="color: rgb(168, 122, 67)"></i> 1 </h4>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Team -->
    <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Nuestros Clientes</h2>
            <h3 class="section-subheading text-muted"><span class="fa-script">Empresas que mejoraron su gestión gracias al manejo de nuestra App</span></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <a href="#"><img class="mx-auto rounded-circle" src="publico/img/ogitxerri.png" alt=""></a>
              <h4>Ogi Txerri</h4>
              <p class="text-muted">Tu pan marrano.</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
               <a href="#"><img class="mx-auto rounded-circle" src="publico/img/bigopan.png" alt=""></a>
              <h4>Bigopan</h4>
              <p class="text-muted">Descripcion</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
               <a href="#"><img class="mx-auto rounded-circle" src="publico/img/peterpan.png" alt=""></a>
              <h4>PeterPan</h4>
              <p class="text-muted">Panes de Cuento</p>

            </div>
          </div>

        <div class="col-sm-4">
            <div class="team-member">
               <a href="#"><img class="mx-auto rounded-circle" src="publico/img/ruso.png" alt=""></a>
              <h4>Ruso</h4>
              <p class="text-muted"></p>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="team-member">
               <a href="#"><img class="mx-auto rounded-circle" src="publico/img/pompan.png" alt=""></a>
              <h4>PomPan</h4>
              <p class="text-muted"></p>
            </div>
          </div>

           <div class="col-sm-4">
            <div class="team-member">
               <a href="#"><img class="mx-auto rounded-circle" src="publico/img/troyano.png" alt=""></a>
              <h4>Troyano</h4>
              <p class="text-muted"></p>
            </div>
          </div>

        </div>


      </div>
    </section>



    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">¿Te interesa?</h2>
            <h3 class="section-subheading text-muted"><span class="fa-script">Contacta con nosotros para resolver todas tus dudas.</span></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Correo Electrónico *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Escribe tus dudas *" required="required" data-validation-required-message="Please enter a message." style="height: 158px;"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; ZubiriManteo-PaNPaS 2018-2019</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Bollos Suizos</h2>
                  <p class="item-intro text-muted">Usuario3</p>
                  <img class="img-fluid d-block mx-auto" src="publico/img/recetas/bollosSuizos.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Fecha de Creación:</li>
                    <li>Categoría:</li>
                    <li>Votos:</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Madalenas</h2>
                  <p class="item-intro text-muted">Usuario1</p>
                  <img class="img-fluid d-block mx-auto" src="publico/img/recetas/madalenas.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Fecha de Creación:</li>
                    <li>Categoría:</li>
                    <li>Votos:</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Pan</h2>
                  <p class="item-intro text-muted">Usuario3</p>
                  <img class="img-fluid d-block mx-auto" src="publico/img/recetas/pan.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Fecha de Creación:</li>
                    <li>Categoría:</li>
                    <li>Votos:</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Pan De Semillas</h2>
                  <p class="item-intro text-muted">Usuario1</p>
                  <img class="img-fluid d-block mx-auto" src="publico/img/recetas/panDeSemillas.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Fecha de Creación:</li>
                    <li>Categoría:</li>
                    <li>Votos:</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Panecillos</h2>
                  <p class="item-intro text-muted">Usuario2</p>
                  <img class="img-fluid d-block mx-auto" src="publico/img/recetas/panecillos.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Fecha de Creación:</li>
                    <li>Categoría:</li>
                    <li>Votos:</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Pastas</h2>
                  <p class="item-intro text-muted">2</p>
                  <img class="img-fluid d-block mx-auto" src="publico/img/recetas/pastas.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Login / Registro Modals -->

    <!-- Login -->
    {{--
      <div class="portfolio-modal modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content loginRegistroModal">
            <div class="text-center" style="padding:50px">
                                <div class="logo">login</div>
                                <!-- Main Form -->
                                <div class="login-form-1">
                                  <form id="login-form" class="text-left" method="get" action="#">
                                    <div class="login-form-main-message"></div>
                                    <div class="main-login-form">
                                      <div class="login-group">
                                        <div class="form-group">
                                          <label for="lg_username" class="sr-only">Username</label>
                                          <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                          <label for="lg_password" class="sr-only">Password</label>
                                          <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
                                        </div>
                                        <div class="form-group login-group-checkbox">
                                          <input type="checkbox" id="lg_remember" name="lg_remember">
                                          <label for="lg_remember">remember</label>
                                        </div>
                                      </div>
                                      <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <div class="etc-login-form">
                                      <p>forgot your password? <a href="#">click here</a></p>
                                      <p>new user? <a href="#">create new account</a></p>
                                    </div>
                                  </form>
                                </div>
                                <!-- end:Main Form -->
                              </div>
          </div>
        </div>
      </div>--}}

            {{-- Ventana(s) modal(es) --}}
            @include('auth.modals.login_modal')
            @include('auth.modals.register_modal')

    <!-- Registro -->
      <div class="portfolio-modal modal fade" id="registroModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content loginRegistroModal">
                                     <div class="text-center" style="padding:50px">
                            <div class="logo">register</div>
                            <!-- Main Form -->
                            <div class="login-form-1">
                              <form id="register-form" class="text-left" method="get" action="#">
                                <div class="login-form-main-message"></div>
                                <div class="main-login-form">
                                  <div class="login-group">
                                    <div class="form-group">
                                      <label for="reg_username" class="sr-only">Email address</label>
                                      <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                      <label for="reg_password" class="sr-only">Password</label>
                                      <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                      <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                                      <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
                                    </div>

                                    <div class="form-group">
                                      <label for="reg_email" class="sr-only">Email</label>
                                      <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                      <label for="reg_fullname" class="sr-only">Full Name</label>
                                      <input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
                                    </div>

                                    <div class="form-group login-group-checkbox">
                                      <input type="radio" class="" name="reg_gender" id="male" placeholder="username">
                                      <label for="male">male</label>

                                      <input type="radio" class="" name="reg_gender" id="female" placeholder="username">
                                      <label for="female">female</label>
                                    </div>

                                    <div class="form-group login-group-checkbox">
                                      <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                                      <label for="reg_agree">i agree with <a href="#">terms</a></label>
                                    </div>
                                  </div>
                                  <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                                </div>
                                <div class="etc-login-form">
                                  <p>already have an account? <a href="#">login here</a></p>
                                </div>
                              </form>
                            </div>
                            <!-- end:Main Form -->
                          </div>
          </div>
        </div>
      </div>

    <!-- Bootstrap core JavaScript -->
    <script src="publico/vendor/jquery/jquery.min.js"></script>
    <script src="publico/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="publico/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="publico/js/jqBootstrapValidation.js"></script>
    <script src="publico/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="publico/js/agency.min.js"></script>

  </body>

</html>
