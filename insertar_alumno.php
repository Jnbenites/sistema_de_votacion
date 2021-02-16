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
	//print_r($_POST);
	if(!isset($_POST['oculto'])){
		exit();
	}
	include_once "bd/connection.php";
	$nombren = $_POST['txtnombre'];
	$cedula = $_POST['txtcedula'];
	$clave = $_POST['txtclave'];
	$sentencia = $bd->prepare("INSERT INTO usuario(cedula, nombre_completo,clave_usu) VALUES (?,?,?);");
	$resultado = $sentencia->execute([$cedula, $nombren, $clave]);

	if ($resultado === TRUE) {
		echo "Insertado correctamente";
		header('Location: cargar_alumnos.php');
	}else{
		echo "No se pudo guardar";
	}

?>
