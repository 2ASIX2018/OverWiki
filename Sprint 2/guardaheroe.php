<?php
session_start();
require_once("anadirheroe.php");
$nombre=$_REQUEST["n_heroe"];
$apellido=$_REQUEST["apellido_heroe"];
$alias=$_REQUEST["alias_heroe"];
$disparoprincipal=$_REQUEST["disparop"];
$diparosecundario=$_REQUEST["dipsaros"];
$hab1=$_REQUEST["1hab"];
$hab2=$_REQUEST["2hab"];
$hab3=$_REQUEST["3hab"];
$definitiva=$_REQUEST["definitiva"];
$pasiva=$_REQUEST["pasiva"];
$clase=$_REQUEST["clase"];
$heroe=new Noticia();
$heroe->nuevoheroe($nombre, $apellido, $alias, $descripcion, $disparoprincipal, $diparosecundario, $hab1, $hab2, $hab3, $definitiva, $pasiva, $clase);
header("Location: index.php");
?>