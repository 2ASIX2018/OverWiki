<?php
session_start();

// Esborrem tota la informació
$_SESSION = array();

// I les cookies pròpies de l'aplicació
if(isset($_COOKIE["OverUser"])){ 
    // Per eliminar la cookie, li posem valor nul
     // I data de validesa el dia abans
    setcookie("OverUser", null, time()-3600);
}
if(isset($_COOKIE["OverRole"])){
     // Per eliminar la cookie, li posem valor nul
     // I data de validesa el dia abans
     setcookie("OverRole", null, time()-3600);     
}

// Esborrem la cookie amb el nom de la sessió 
if(isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
} 
  

// I finalment destruïm la sessió
session_destroy();

// I tornem a la pàgina principal
header("Location: index.php");
exit();
?>