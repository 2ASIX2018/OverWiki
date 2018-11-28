<?php
session_start();
require_once("models/noticia.php");
$nombre=$_REQUEST["n_heroe"];
$apellido=$_REQUEST["apellido_heroe"];
$alias=$_REQUEST["alias_heroe"];
$descripcion=$_REQUEST["descripcion"];
$disparoprincipal=$_REQUEST["disparop"];
$dipsarosecundario=$_REQUEST["dipsaros"];
$hab1=$_REQUEST["1hab"];
$hab2=$_REQUEST["2hab"];
$hab3=$_REQUEST["3hab"];
$definitiva=$_REQUEST["definitiva"];
$pasiva=$_REQUEST["pasiva"];
$clase=$_REQUEST["clase"];
$noticia=new Noticia();
$noticia->afigNoticia($titol, $cat, $ressum, $contingut);
header("Location: index.php");
?>