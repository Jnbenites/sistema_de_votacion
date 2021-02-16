<?php
	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	include 'bd/connection.php';
	$id = $_GET['id'];

	$sentencia = $bd->prepare("SELECT * FROM usuario WHERE id_usu = ?;");
	$sentencia->execute([$id]);
	$usuario = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($usuario);
?>


<!DOCTYPE html>
<html>
<head>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>

<div class="center-block col-md-4 col-xs-8">
<body>
<h3 class="text-center">Editar alumno</h3>

<form method="POST" action="editar_alumno_proceso.php">

<label>Nombre:</label>
	<input class="form-control" required="" type="text" name="txtnombre" value="<?php echo $usuario->nombre_completo;?>">
<label>Cedula:</label>
	<input class="form-control" type="number" required="" name="txtncedula" value="<?php echo $usuario->cedula;?>">
<label>Clave:</label>
	<input class="form-control" type="text" required="" name="txtclave" value="<?php echo $usuario->clave_usu;?>">
<label>Estado:</label>
	<input class="form-control" type="text" required="" name="txtestado" value="<?php echo $usuario->estado;?>">
<br>
<input type="HIDDEN" name="oculto">
<input type="HIDDEN" name="txtid" value="<?php echo $usuario->id_usu?>">
<input class="btn btn-primary" type="submit" value="Guardar cambios">
<a class="btn btn-danger" href="/cargar_alumnos.php" >Cancelar</a>
</form>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>



</body>
</div>
</html>