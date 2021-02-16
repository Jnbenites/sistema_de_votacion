<?php 
	//print_r($_POST);
if (!isset($_POST)){
	header('Location: index.php');

}


include 'bd/connection.php';
$id2 =$_POST['oculto'];
$nombre2 =$_POST['txtnombre'];
$cedula2 =$_POST['txtncedula'];
$clave2 =$_POST['txtclave'];
$estado2 =$_POST['txtestado'];
$id2 =$_POST['txtid'];

	$sentencia = $bd->prepare("UPDATE usuario SET cedula = ?, clave_usu= ?, estado = ?, nombre_completo = ? WHERE id_usu = ?;");
	$resultado = $sentencia->execute([$cedula2, $clave2, $estado2, $nombre2, $id2]);
//validar evio
	If($resultado == TRUE){
		header('Location: cargar_alumnos.php');
	}else{
		echo "Error";
	}
?>