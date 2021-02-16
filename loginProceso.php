<?php
session_start();
include_once "bd/connection.php";
	// These are the login variables 
	$usuario = $_POST['txtusu'];
	$contrasena = $_POST['txtpass'];
	//this is the query
	$sentencia = $bd->prepare('SELECT * FROM usuario WHERE cedula = ? AND clave_usu = ?;');
	//run de query
	$sentencia->execute([$usuario, $contrasena,]);
	//save query data
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//review data obtained 
	//print_r($datos);
	if($datos === FAlSE){
	//Back to top
		header('location: index.php');
}elseif($sentencia->rowCount() == 1){
		//start var session
		$_SESSION['nombre'] = $datos->cedula;
		$_SESSION['nombrecompleto'] = $datos->nombre_completo;
		$_SESSION['id_usuario'] = $datos->id_usu;
		$_SESSION['estado_voto'] = $datos->estado;
		// user or admin



		if($_SESSION["nombrecompleto"] == "administrador"){
			header('Location: cargar_alumnos.php');
		}
		// ckeck voting status
		else{
			if($_SESSION['estado_voto'] == "0") {
				header('Location: elegir_candidato.php');
			}
			else{
				header('Location: yavoto.php');
			}
		}
	}
?>