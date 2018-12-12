<?php
session_start();
require_once("models/usuari.php");
// Creem un objecte de tipus usuari
$usuari=new Usuari();
// Vector temporal amb els usuaris
// Després caldrà consultar a la base de dades

$user=$_REQUEST["inputUser"];
$pass=$_REQUEST["inputPassword"];
$remember=$_REQUEST["rememberMe"];
// Comprovem l'usuari amb el mètode validaUsuari
$role=$usuari->validaUsuari($user, $pass);
if ($role){
    // Usuari logat amb èxit.
    $_SESSION['username']=$user;
    $_SESSION['role'] = $role;
    // Si l'usuari ho ha indicat, guardem les credencials
    if($remember=="remember") {
        setcookie('OverUser', $_SESSION['username'], time() + 365 * 24 * 60 * 60); 
        setcookie('OverRole', $_SESSION['role'], time() + 365 * 24 * 60 * 60); 
    }
    header("Location: index.php");
    exit();
}
else { // Aquesta clau la tancarem després d'afegir codi HTML pur
?>

<!-- Posem el codi html de la pàgina d'error en el login -->
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>OverWiki</title>

  <?php
  require_once("StylesLoader.php");
  ?>
</head>

<body>
    <div class="container" style="margin-top:10em;">
    <div class="alert alert-danger" role="alert">
    Error: No existe el usuario.
    </div>
    <a href="registrarse.php">Registrarse</a>
    <a href="loginForm.php">Volver atras</a>
    </div>
    <!-- Pie de pagina -->
    <?php require_once "footer.php"; ?>    
</body>

</html>



<?php
// Tanquem la clau de l'else
}
?>
