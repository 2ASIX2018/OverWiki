<?php
class Usuari{
    
    public function validaUsuari($usuari, $pass){

         try{

         require_once "connexio.php";
         $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
         $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]);

         $consulta = $db->prepare('SELECT rol FROM Usuari WHERE login = ? AND Password = ?');
         $consulta->execute(array($usuari, $pass));
         $role=false; // Inicialitzem el rol a fals
         while($fila=$consulta->fetch()){ // Si la consulta ha tornat algun resultat
         $role=$fila[0]; // l'assignem a role
         }
         $db=null; // Tanquem la base de dades
         return $role; // retornem el rol obtingut o fals.
        
         } 
         catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
        }
       }
       public function registrarUsuari($usuari, $pass, $email){
        // Mètode que valida un usuari
        // Retornarà el rol de l'usuari si aquest està registrat
        // o false si no ho està
         try{
         require "connexio.php";

         $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
         $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"], $email["email"]);
         
         $consulta = $db->prepare('SELECT * FROM Usuari WHERE login = ? OR email = ? LIMIT 1');
         $consulta->execute(array($usuari, $email));
        $resultado=$consulta->fetch();
        if ($resultado){
            echo "Usuario o email ya esta registrado";
        }
        else{
        $consulta = $db->prepare("INSERT INTO `Usuari` (`login`, `rol`, `password`, `email`) VALUES(?, 'user', ?, ?)");
        $consulta->execute(array($usuari, $pass, $email));
        header("location: index.php");
    }
        $db=null;
        }
        catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
        }
       }
}
?>