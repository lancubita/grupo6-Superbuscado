<?php

session_start();

 ?>



<!DOCTYPE html>
<html>

<head>

    <!-- Configuración -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicia sesión</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- styles CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/landing_style.css">
    <link rel="stylesheet" href="css/login_register_contact.css">

    <!-- icons -->
    <link rel="stylesheet" href="assets/icons/icons.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="iso-superbuscado.ico" />

</head>

<body class="bg-grey-login-register">

  <section class="container" style="height:80px">
    <div class="row d-flex justify-content-center">
      <div class="col-3 d-flex justify-content-center">
        <a href="landing.html">
          <img class="logo-navbar-green" src="assets/img/logo-superbuscado-green.png" alt="">
        </a>
      </div>
    </div>
  </section>

  <!-- _____________________ Login _____________________ -->

  <section class="container">
    <div class="row d-flex justify-content-center">

      <div class="col-12 col-md-8 col-lg-5 mt-3">
        <div class="card card-shadow d-flex align-items-center">

          <div class="row">
            <div class="col-12">

              <p class="title-login">Ingresá a tu cuenta</p>

              <form class="" action="index.html" method="post">
                <div class="row">

                  <div class="col-12 d-flex justify-content-center">
                    <input class="input-login" type="email" name="email" value="" placeholder="Email">
                  </div>

                  <div class="col-12 d-flex justify-content-center">
                    <input class="input-login" type="password" name="password" value="" placeholder="Contraseña">
                  </div>

                  <div class="col-12 remember">
                    <input class="" type="checkbox" name="remember" id="remember1" value="remember">
                    <label for="remember1">Recordar usuario</label>
                  </div>

                  <div class="col-12 d-flex justify-content-center">
                    <button class="btn-ingresar" type="submit" name="button">Ingresar</button>
                  </div>

                </div>
              </form>

            </div>

          </div>

        </div>
      </div>

      <!-- _____________________ Register _____________________ -->

      <div class="col-12 col-md-8 col-lg-5 my-3">
        <div class="card card-shadow d-flex align-items-center">

          <div class="row">
            <div class="col-12">

              <p class="title-login">Creá tu cuenta</p>

              <form class="" action="index.html" method="post">
                <div class="row">

                  <div class="col-12 d-flex justify-content-center">
                    <input class="input-login" type="text" name="name" value="" placeholder="Nombre">
                  </div>

                  <div class="col-12 d-flex justify-content-center">
                    <input class="input-login" type="text" name="lastname" value="" placeholder="Apellido">
                  </div>

                  <div class="col-12 d-flex justify-content-center">
                    <input class="input-login" type="email" name="email" value="" placeholder="Email">
                  </div>

                  <div class="col-12 d-flex justify-content-center">
                    <input class="input-login" type="password" name="password" value="" placeholder="Contraseña">
                  </div>

                  <div class="col-12 remember">
                    <input class="" type="checkbox" name="remember" id="remember2" value="remember">
                    <label for="remember2">Recordar usuario</label>
                  </div>

                  <div class="col-12 d-flex justify-content-center">
                    <button class="btn-ingresar" type="submit" name="button">Registrate</button>
                  </div>

                </div>
              </form>

              <p class="terminos-y-condiciones">Al hacer clic en "Registrate", acepta nuestros <a class="redirect-link" href="#">términos de servicio y política de privacidad.</a>  Ocasionalmente le enviaremos correos electrónicos relacionados con la cuenta.</p>

            </div>

          </div>

        </div>
      </div>

    </div>
  </section>



  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

</body>

</html>
