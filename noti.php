<?php
session_start();
if (!$_SESSION['ida']) {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
     <!--icono de la pagina-->
     <link rel="shortcut icon" href="img/logoAlfonsoMArina.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link rel="icon" href="http://collectivecloudperu.com/blogdevs/wp-content/uploads/2017/09/cropped-favicon-1-32x32.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>Notificaciones </title>
    <link rel="icon" href="img/admin.png" type="image/png">
    <!-- Bootstrap core CSS -->
    <link href="css/hde/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/hde/starter-template.css" rel="stylesheet">
    <link href="css/hde/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">


  </head>

  <body>
   <!-- Sub Header -->
   <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p class="nomuser">Bienvenido Administrador <em><?php echo ucfirst($_SESSION['nombre']); ?></em> </p>
            <!--<p>Administrador <em>Alfonso Marina</em></p>-->
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
              <li><a href="infousuario.php">Usuarios</a></li>
              <li><a href="crud.php">Perfiles y reportes</a></li>
              <li><a href="noti.php" class="active">Notificaciones</a></li>
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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <?php
            include("conexion.php");
        ?>                        

          <div class="demo-content">
            <div id="notification-header">
              <div style="position:relative">
                <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="img/icono.png" /></button>
                <div id="notification-latest"></div>
              </div>          
            </div>
          </div>

          <?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
          <?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>


      </div>
    </nav>

  </header>
  <!-- ***** Header Area End ***** -->
  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Notificaciones</h2>
          <h6>Revisa las notificaciones de las actvidades que tienes</h6>
        </div>
      </div>
    </div>
  </section>
  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <div class="container">

          <div class="starter-template">
              <h1>Sistema de Notificaciones con PHP,  MySQL y Ajax jQuery </h1>

              <p class="lead">

                  <form name="frmNotification" id="frmNotification" action="php/agregarnotificacion.php" method="post" >
                    <div class="form-group">
                      <label for="autor">Autor </label>
                      <input type="text" class="form-control" name="autor" id="autor" placeholder="Ingresa Autor" required>
                    </div>
                    <div class="form-group">
                      <label for="mensaje">Mensaje </label>
                      <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Mensaje" required></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="add" id="btn-send" value="Enviar">
                    </div>

                  </form>            

              </p>

            </div>

          </div><!-- /.container -->


        </div>
      </div>
      <div class="footer">
        <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
          <br>Design: <a href="https://templatemo.com/page/1" target="_parent" title="website templates">Strong warriors</a>
        </p>
      </div>
  </section>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "php/notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });                                     
    </script>
    
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
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
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

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>


  </body>
</html>
