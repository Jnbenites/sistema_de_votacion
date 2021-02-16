<?php
	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	include 'bd/connection.php';
	$id = $_GET['id'];

	$sentencia = $bd->prepare("SELECT * FROM lista WHERE id_lista = ?;");
	$sentencia->execute([$id]);
	$lista = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($lista);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Editar usuario</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>


<body>
	<div class="center-block col-md-4 col-xs-8">
<h3 class="text-center">Editar lista</h3>

<form method="POST" class="center-block" action="editar_lista_proceso.php">

<label>Nombre lista:</label>
	<input class="form-control" required="" type="text" name="txtnombrelista" value="<?php echo $lista->nombre_lista;?>">
<label>Presidente:</label>
	<input class="form-control" required="" type="text" name="txtpresidente" value="<?php echo $lista->presidente;?>">
<label>Vicepresidente:</label>
	<input class="form-control" required="" type="text" name="txtvicepresidente" value="<?php echo $lista->vicepresidente;?>">
<label>Tesorero:</label>
	<input class="form-control" required="" type="text" name="txttesorero" value="<?php echo $lista->tesorero;?>">
<label>Secretario:</label>
	<input class="form-control" required="" type="text" name="txtsecretario" value="<?php echo $lista->secretario;?>">
<label>Vocal1:</label>
	<input class="form-control" required="" type="text" name="txtvocal1" value="<?php echo $lista->vocal1;?>">
<label>Vocal2:</label>
	<input class="form-control" required="" type="text" name="txtvocal2" value="<?php echo $lista->vocal2;?>">
<br>
<input type="HIDDEN" name="oculto">
<input type="HIDDEN" name="txtidlista" value="<?php echo $lista->id_lista?>">
<input class="btn btn-primary" type="submit" value="Guardar cambios">
<input type ="submit" href="/cargar_lista.php" class="btn btn-danger" name="boton" Value="Cancelar">
</form>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</body>
</div>
</html>