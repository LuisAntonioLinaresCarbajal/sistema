<?php
session_start();
if (!$_SESSION['ida']) {
  header('location:index.php');
}
?>
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

    <title>Información usuarios</title>
    <link rel="icon" href="img/user.png" type="image/png">

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
            <p>Administrador <em><?php echo ucfirst($_SESSION['nombre']); ?></em></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
            <li><a href="https://www.facebook.com/alfonsomarinahome/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/alfonsomarinamx?t=8FnYwgJZRUhMdeYN6-sLCA&s=09"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://instagram.com/alfonsomarinahome?utm_medium=copy_link"><i class="fa fa-instagram"></i></a></li>
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
                      <li><a href="dashboardadmin.php">Inicio</a></li>
                          <li><a href="infousuario.php" class="active">Usuarios</a></li>
                          <li><a href="crud.php">Perfiles y reportes</a></li>
                          <li><a href="noti.php">Notificaciones</a></li>
                          <li><a href="agregardep.php">Agregar departamentos</a></li>
                          <li><a href="logout.php">Salir</a></li>
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
          <h2>Información de usuarios</h2>
          <h6>Revisa la información de todos los usuarios.</h6>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="filters">
                <ul>
                  <li data-filter="*"  class="active"><h6>Información<h6></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        
                      </div>
                      <a href=""><img src="assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        
                      </div>
                      <a href=""><h4>Departamento de Finanzas</h4></a>
                      <p>Revisa la información del departamento.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        
                      </div>
                      <a href=""><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        
                      </div>
                      <a href=""><h4>Departamento de Recursos Humanos</h4></a>
                      <p>Revisa la información del departamento.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        
                      </div>
                      <a href=""><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        
                      </div>
                      <a href=""><h4>Departamento de Ventas</h4></a>
                      <p>Revisa la información del departamento.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        
                      </div>
                      <a href=""><img src="assets/images/meeting-04.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        
                      </div>
                      <a href=""><h4>Departamento de Tecnologías<br>de la Información</h4></a>
                      <p>Revisa la información del departamento.</p>
                    </div>
                  </div>
                </div>
                    
                  
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
    <p>©Alfonso Marina Ebanista. Derechos Reservados. Desarrollo Denumeris Interactive 2021
        Aviso de privacidad 
          <br>Design: <a href="https://luisantoniolinarescarbajal.github.io/TECHMEXElComfortdelingeniero/" target="_parent" title="free css templates">Strong Warriors</a></p>
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
