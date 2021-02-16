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
	//print_r($_GET);
	If(!isset($_GET['id'])){
		exit();
	}

	$id3 = $_GET['id'];
	include 'bd/connection.php';
	$sentencia = $bd->prepare("DELETE FROM usuario WHERE id_usu = ?;");
	$resultado = $sentencia->execute([$id3]);

	if($resultado === TRUE){
		header('Location: cargar_alumnos.php');
	}else{
		echo "Error" ;
	}
?>