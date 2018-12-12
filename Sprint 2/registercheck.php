<?php
session_start();
require_once("models/usuari.php");
// Creem un objecte de tipus usuari
$usuari=new Usuari();


$user=$_REQUEST["login"];
$pass=$_REQUEST["password"];
$remember=$_REQUEST["email"];
// Comprovem l'usuari amb el mètode validaUsuari
$role=$usuari->registrarUsuari($user, $pass, $email);
?>