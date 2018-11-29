<?php
class Heroes{
    
    public function nuevoheroe($nombre, $apellido, $alias, $descripcion, $disparoprincipal, $diparosecundario, $hab1, $hab2, $hab3, $definitiva, $pasiva, $clase){
        
        try{
            require_once "connexio.php";
            
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
            
            $consulta = $dbCon->prepare('INSERT INTO `Personajes`
            (
            $consulta = $dbCon->prepare("SELECT `Nombre`,
            `Apellido`,
            `Alias`,
            `Clase`,
            `DisparoP`,
            `DisparoS`,
            `HabilidadPrimaria`,
            `HabilidadSecundaria`,
            `HabilidadTercera`,
            `Definitva`,
            `Pasiva`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
            
            echo("<br/>Nombre:".$nombre);
            echo("<br/>Apellido:".$apellido);
            echo("<br/>Alias".$alias);
            echo("<br/>Disparo Principal:".$disparoprincipal);
            echo("<br/>Disparo Secundario:".$diparosecundario);
            echo("<br/>1ra Habilidad:".$hab1);
            echo("<br/>2a Habilidad:".$hab2);
            echo("<br/>3a Habilidad:".$hab3);
            echo("<br/>Habilidad Definitiva:".$definitiva);
            echo("<br/>Pasiva:".$pasiva);
            echo("<br/>Clase:".$clase);
                        
            $dbCon=null;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }
    public function llistaheroes($ini, $fin){
        try{
            require "connexio.php";
            
            // Fem la connexió
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
            // Preparem la consulta
            $consulta = $dbCon->prepare("SELECT `Nombre`,
            `Apellido`,
            `Alias`,
            `Clase`,
            `DisparoP`,
            `DisparoS`,
            `HabilidadPrimaria`,
            `HabilidadSecundaria`,
            `HabilidadTercera`,
            `Definitva`,
            `Pasiva` FROM Personajes");
            
            // Executem la consulta
            //$consulta->execute(array(1.0, 3.0));
            //$consulta->execute();
            $consulta->bindValue(':offset', intval($ini),PDO::PARAM_INT);
            $consulta->bindValue(':limit',  intval($fin),PDO::PARAM_INT);
            $consulta->execute();
            $heroes=array();
            // Agafem els resultats amb un bucle i els afegim a l'array de noticies
            while($fila=$consulta->fetch()){
                $heroe["Nombre"]=$fila[0];
                $heroe["Apellido"]=$fila[1];
                $heroe["Alias"]=$fila[3];
//                $heroe["Clase"]=$fila[4];
//                $heroe["DisparoP"]=$fila[5];
//                $heroe["DisparoS"]=$fila[6];
//                $heroe["HabilidadPrimaria"]=$fila[7];
//                $heroe["HabilidadSecundari"]=$fila[8];
//                $heroe["HabilidadTercera"]=$fila[9];
//                $heroe["Definitiva"]=$fila[10];
//                $heroe["Pasiva"]=$fila[11];
                array_push($heroe);
            }
            // Tanquem la connexió
            $dbCon=null;
            // tornem els resultats
            return $noticies;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }
}
?>