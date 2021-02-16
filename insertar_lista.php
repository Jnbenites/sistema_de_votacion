<?php
include("header.php");
	session_start();
  if(!isset($_SESSION['nombre'])){
  	header('location: index.php');
  }elseif ($_SESSION['nombre']) {
  	//
  }else{
    echo "Error del sistema";
  }

?>
<?php
	print_r($_POST);
	if(!isset($_POST['oculto'])){
		exit();
	}
	include_once "bd/connection.php";
	$nombrex = $_POST['txtnombre_lista'];
	$presidentex = $_POST['txtpresidente'];
	$vicepresidentex = $_POST['txtvicepresidente'];
	$tesorerox = $_POST['txttesorero'];
	$secretariox = $_POST['txtsecretario'];
	$vacalx = $_POST['txtvocal1'];
	$vocalxx = $_POST['txtvocal2'];

	$sentencia = $bd->prepare("INSERT INTO lista(nombre_lista, presidente,vicepresidente, tesorero, secretario, vocal1, vocal2) VALUES (?,?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$nombrex, $presidentex, $vicepresidentex, $tesorerox, $secretariox, $vacalx, $vocalxx]);

	if ($resultado === TRUE) {
		echo "Insertado correctamente";
		header('Location: cargar_lista.php');
	}else{
		echo "No se pudo guardar";
	}

?>
