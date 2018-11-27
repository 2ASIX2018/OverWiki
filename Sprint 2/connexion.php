public function validaUsuari($usuari, $pass){
// Mètode que valida un usuari
// Retornarà el rol de l'usuari si aquest està registrat
// o false si no ho està
 try{
 // 1. Establim una connexió amb MySQL:
 // 1.1. Carreguem la informació de la connexió del fitxer connexió.php
 require_once "connexio.php";
 // 1.2. Creem la cadena de connexió al servidor MySQL, indicant el protocol,
 // el servidor, el nom de la BD i usuari i contrassenya (no confondre amb
 // els de l'usuari i la contrassenya que busquem, sinò els del root de la BD)
 $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
 $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]);
 // 2. Preparem la consulta i l'executem amb els paràmetres adequats
 $consulta = $db->prepare('SELECT rol FROM Usuari WHERE login = ? AND Password = ?');
 $consulta->execute(array($usuari, $pass));

 // 3. Recorrem la llista de resultats (només serà 0 o 1)
 $role=false; // Inicialitzem el rol a fals
 while($fila=$consulta->fetch()){ // Si la consulta ha tornat algun resultat
 $role=$fila[0]; // l'assignem a role
 }
 $db=null; // Tanquem la base de dades
 return $role; // retornem el rol obtingut o fals.

 } catch (Exception $e){ // Si es produeix alguna excepció
 echo("Error:".$e->getMessage()); // Mostrem l'error per pantalla
 db=null;
 }
}
<?php
session_start();
// 1. Incloem el model de l'usuari
require_once("models/usuari.php");
// 2. Creem un objecte de tipus usuari
$usuari=new Usuari();
// Recollim les dades enviades pel formulari de login
$user=$_REQUEST["inputUser"];
$pass=$_REQUEST["inputPassword"];
$remember=$_REQUEST["rememberMe"];
// 3. Comprovem l'usuari amb el mètode validaUsuari
$role=$usuari->validaUsuari($user, $pass);
// 4. Comprovem l'usuari i establim el rol concret
if ($role){
 // Usuari logat amb èxit.
 $_SESSION['username']=$user;
 $_SESSION['role'] = $role;
 // Si l'usuari ho ha indicat, guardem les credencials