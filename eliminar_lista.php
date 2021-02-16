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

	$id4 = $_GET['id'];
	include 'bd/connection.php';
	$sentencia = $bd->prepare("DELETE FROM lista WHERE id_lista = ?;");
	$resultado = $sentencia->execute([$id4]);

	if($resultado === TRUE){
		header('Location: cargar_lista.php');
	}else{
		echo "Error" ;
	}
?>