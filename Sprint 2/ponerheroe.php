
<!DOCTYPE html>
<html lang="en">
<title>OverWiki</title>
    <link rel="icon" type="image/png" href="imgs/overwatch_logo.png" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


  </head>
  <?php
/* Si l'usuari no està registrat redirigim a index.php */
session_start();
if(!isset($_SESSION["username"])) header("Location: index.php");
require ("anadirheroe.php");
$cat=new Heroe();
$categories=$cat->getCategories();
?>
  <body>

    <!-- Navigation -->
    <?php
    require_once("menu.php");
    ?>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Poner heroe nuevo</h3>
						<form id="newPost" method="post" action="guardaheroe.php">
			 			</div>
			 			<div class="panel-body">
			    		<form role="heroe">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="nombre_heroe" id="n_heroe" class="form-control input-sm" placeholder="Nombre del Heroe">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="apellido_heroe" id="a_heroe" class="form-control input-sm" placeholder="Apellido del heroe">
			    					</div>
			    				</div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="alias_heroe" id="alias_heroe" class="form-control input-sm" placeholder="Alias del heroe">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Descripcion">
			    			</div>

			    			<div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="disparop" id="disparop" class="form-control input-sm" placeholder="Disparo Principal">
			    					</div>
			    				</div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="dipsaros" id="dipsaros" class="form-control input-sm" placeholder="Disparo Secundario">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="1hab" id="1hab" class="form-control input-sm" placeholder="1ra Habilidad">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="2ahab" id="2ahab" class="form-control input-sm" placeholder="2a Habilidad">
			    					</div>
			    				</div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="3ahab" id="3ahab" class="form-control input-sm" placeholder="3a Habilidad">
			    					</div>
			    				</div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="definitiva" id="definitiva" class="form-control input-sm" placeholder="Habilidad Definitiva">
			    					</div>
			    				</div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="pasiva" id="pasiva" class="form-control input-sm" placeholder="Pasiva">
			    					</div>
			    				</div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="clase" id="clase" class="form-control input-sm" placeholder="Clase">
			    					</div>
			    				</div>
			    			</div>
			    			<form enctype="multipart/form-data" action="cosa.php" method="POST">
                <input name="foto" type="iamge" />
                <input type="submit" value="Subir foto" />
                </form>
			    			<input type="submit" value="Enviar" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>