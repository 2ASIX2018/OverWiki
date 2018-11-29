    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <!-- Navigation -->
    <?php
    require_once("menu.php");
    ?>
	 <?php
/* Si l'usuari està registrat redirigim a index.php */
session_start();
if(isset($_SESSION["username"])) header("Location: index.php");
?>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Registrarse</h3>
						<form action="registercheck.php" method="post" id="FormularioRegistro">
			 			</div>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                			<input type="text" name="login" id="login" class="form-control input-sm" placeholder="Nick">
			    					</div>
			    				</div>


			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Correo Electronico">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>