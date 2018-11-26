<?php
session_start();
$usuaris=["admin", "user"];
$user=$_REQUEST["inputUser"];
$pass=$_REQUEST["inputPassword"];
$remember=$_REQUEST["rememberMe"];
$errors="";
if (empty($_REQUEST["repeat_name"])) {
   $errors=$errors."<p>El camp 'Repeteix el nom' ha de tindre un valor</p>";
 } 
if ($pass=="1234" && in_array($user, $usuaris)) {
    // Usuari logat amb èxit.
    $_SESSION['username']=$user;
    // Establim el rol de la sessió
    if ($user=="admin")
        $_SESSION['role'] = "admin";
    else if ($user=="user")
        $_SESSION['role'] = "user";
        // Si l'usuari ho ha indicat, guardem les credencials
    if($remember=="remember") {
        setcookie('OverUser', $_SESSION['username'], time() + 365 * 24 * 60 * 60); 
        setcookie('OverRole', $_SESSION['role'], time() + 365 * 24 * 60 * 60); 
    }
    header("Location: index.php");
}
?>