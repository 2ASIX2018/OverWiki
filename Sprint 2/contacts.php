<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="imgs/overwatch_logo.png" />
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <?php
    require_once("menu.php");
    ?>
    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Pagina de contacto</h1>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>¿Problemas?¿Necesitas ayuda?</h2>
            <ul>
              <li>Contacta con nuestro equipo de administradores:</li>
              <p>admin@admin.com</p>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <?php
      if (isset($_SESSION['role']) && ($_SESSION['role']=="admin" || $_SESSION['role']=="user" )) {
    ?>
      <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          <h2>¿Quieres unirte a nuestro equipo de administradores?</h2>
            <ul>
              <li>Contactanos:</li>
              <p>wannabeadmin@admin.com</p>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <?php } else { ?>
      <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>¿Quieres unirte a nuestro equipo de administradores?</h2>
            <ul>
              <li>Registrate antes:</li>
              <a class="nav-link" href="registrarse.php">Pagina de registro</a>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <?php }?>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>
