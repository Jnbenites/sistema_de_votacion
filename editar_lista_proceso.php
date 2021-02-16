<?php 
	//print_r($_POST);
if (!isset($_POST)){
	header('Location: index.php');

}

include 'bd/connection.php';
$id4 =$_POST['oculto'];
$nombrelista =$_POST['txtnombrelista'];
$npresidente =$_POST['txtpresidente'];
$nvicepresidente =$_POST['txtvicepresidente'];
$ntesorero =$_POST['txttesorero'];
$nsecretario =$_POST['txtsecretario'];
$nvocal1 =$_POST['txtvocal1'];
$nvocal2 =$_POST['txtvocal2'];
$id4 =$_POST['txtidlista'];


	$sentencia = $bd->prepare("UPDATE lista SET nombre_lista = ?, presidente= ?, vicepresidente = ?, tesorero = ?, secretario = ?, vocal1 = ?, vocal2 =? WHERE id_lista = ?;");
	$resultado = $sentencia->execute([$nombrelista, $npresidente, $nvicepresidente, $ntesorero, $nsecretario, $nvocal1, $nvocal2, $id4]);
//validar evio
	If($resultado == TRUE){
		header('Location: cargar_lista.php');
	}else{
		echo "Error";
	}
?>