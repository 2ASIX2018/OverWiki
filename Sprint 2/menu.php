<?php
session_start();
$user="Invitado";
$role="";

if (isset($_SESSION['username'])) {
  $user=$_SESSION['username'];
  if (isset($_SESSION['role']) && $_SESSION['role']=="admin") $role="(administrador)";
  else $role="";
} else if (isset($_COOKIE['OverUser'])){
      $_SESSION['username'] = $_COOKIE['OverUser'];
      if (isset($_COOKIE['OverRole'])) $_SESSION['role'] = $_COOKIE['OverRole'];
      if ($_SESSION['role']=="admin") $role="(administrador)"; else $role="";
      $user=$_SESSION['username'];
}

$userLabel=$user.$role;
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">OverWiki</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="description.php">Descripción</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacts.php">Contacto</a>
            </li>
            <?php
            if (isset($_SESSION['role']) && $_SESSION['role']=="admin") {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="administra.php">Administrador</a>
            </li>
            
            <?php } ?>
            <?php
            if (isset($_SESSION['role']) && ($_SESSION['role']=="admin" || $_SESSION['role']=="user" )) {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="ponerheroe.php">Poner Heroe</a>
            </li>
            
            <?php } else { ?>
              <li class="nav-item">
              <a class="nav-link" href="registrarse.php">Registrarse</a>
            </li>
            <?php }?>
          </ul>
        </div>
        <div id="userInfo">
        <?php echo ($userLabel);
        if($user!="Invitado") { ?>
            <a href="cerrarsesion.php"> Cerrar Sesion</a>
            <?php } else { ?>
            <a href="loginForm.php"> Iniciar Sesion</a>
        <?php }?>
       </div>
      </div>
    </nav>