
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OverWiki</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="icon" type="image/png" href="imgs/overwatch_logo.png" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

  </head>
<?php
    require_once("menu.php");
?>
    <form id="Login" action="login.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" required="required" name="inputUser" placeholder="Usuari">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" required="required" name="inputPassword" placeholder="Contrasenya">
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