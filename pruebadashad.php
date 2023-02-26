<!DOCTYPE html>
<html lang="en">

  <head>
    <!--icono de la pagina-->
    <link rel="shortcut icon" href="img/logoAlfonsoMArina.jpg" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
   
    <title>Inicio</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

   

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Administrador <em>Alfonso Marina</em></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          Alfonso Marina
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="meetings.html" class="active">Inicio</a></li>
                          <li><a href="index.html">Usuarios</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Perfiles y notificaciones</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.html">Crear</a></li>
                                  <li><a href="meeting-details.html">Modificar</a></li>
                                  <li><a href="meeting-details.html">Eliminar</a></li>
                                  <li><a href="meeting-details.html">Notificaciones</a></li>
                              </ul>
                          </li>
                          <li><a href="index.html">Agregar departamentos</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Generar reportes</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.html">Departamento</a></li>
                                  <li><a href="meeting-details.html">Personal</a></li>
                              </ul>
                          </li>
                          </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>BIENVENIDO</h2>
          <h6>Aquí puedes revisar las evualuaciones del personal, crear y controlar perfiles<br>
           del personal, así como añadir departamentos y realizar resportes a usuario y departamentos.</h6>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <center>

                <font color="white"><h1>Reporte de departamento</h1>
                <h4>Ingrese los datos para dar de alta a los usuarios en el sistema</h4></font>

                <form  class="form" method="POST" action="guardar_contacto.php" >

                <div class="form-group">
                  <center><label for="nombre">Nombre del usuario: </label></center>
                  <input type="text" required name="nombre" placeholder="Ingrese el nombre del usuario..." class="form-control" id="nombre" >
                </div>

                <div class="form-group">
                  <center><label for="dir">Apellido Parterno: </label></center>
                  <input type="text" required name="apPaterno" placeholder="Escriba el apellido paterno..." class="form-control" id="dir">
                </div>

                <div class="form-group">
                  <center><label for="tel">Apellido Materno: </label></center>
                  <input type="text" required name="apMaterno" placeholder="Escriba el apellido materno....." class="form-control" id="tel">
                </div>

                <div class="form-group">
                  <center><label for="tel">Contraseña: </label></center>
                  <input type="text" required name="pasword" placeholder="Ingrese la contraseña.." class="form-control" id="tel">
                </div>

                <div class="form-group">
                  <center><label for="tel">Id de área: </label></center>
                  <input type="text" required name="idArea" placeholder="Ingrese la clave del área.." class="form-control" id="tel">
                </div>

                <div class="form-group">
                  <center><label for="tel">Id del tipo de ususario: </label></center>
                  <input type="text" required name="idTipoUsuario" placeholder="Ingrese la clave del tipo de usuario..." class="form-control" id="tel">
                </div>

                <div class="form-group">
                  <center><label for="tel">Id del teléfono: </label></center>
                  <input type="text" required name="idTelefono" placeholder="Ingrese la clave del teléfono." class="form-control" id="tel">
                </div>
           
                <center>
                  <input type="submit" value="Enviar datos" class="btn btn-success" name="btn_registrar">
                </center>

              </form>  

          </center> 
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com/page/1" target="_parent" title="website templates">TemplateMo</a></p>
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>

</html>
