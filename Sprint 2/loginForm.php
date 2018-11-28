<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OverWiki</title>

    <?php
    require_once("StylesLoader.php");
    ?>
    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <?php
    require_once("menu.php");
    ?>

    <div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Iniciar Sesión</h2>
   <a href="registrarse.php">Registrate</a>
   </div>
    <form id="Login" action="login.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" required="required" id="inputUser" name="inputUser" placeholder="Usuari" autofocus="autofocus"/>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" required="required" id="inputPassword" name="inputPassword" placeholder="Contrasenya"/>
        </div>

        <div class="form-group">            
        <div class="checkbox">
            <label><input type="checkbox" name="rememberMe" id="rememberMe" value="remember">
            Recorda'm en aquest ordinador
            </label>
        </div>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>
</div></div></div>


    <?php require_once "footer.php"; ?>    
  </body>

</html>