<?php
require_once("conexion.php");
session_start();
$ruta = '../imagenes/';
$sepuedeCargarDatos=array();



if ($_FILES["archivo0"]["size"]<4000000) {
	if ($_FILES["archivo0"]["type"]=="image/jpeg"||$_FILES["archivo0"]["type"]=="image/jpg"||$_FILES["archivo0"]["type"]=="image/png") {

		$NombreOriginal = $_FILES["archivo0"]['name'];

		$temporal = $_FILES["archivo0"]['tmp_name'];

		$Destino = $ruta.$NombreOriginal;

		move_uploaded_file($temporal, $Destino);
		
		array_push($sepuedeCargarDatos,true);
	}
	else{
		array_push($sepuedeCargarDatos,false);
	}
}
else{
	array_push($sepuedeCargarDatos,false);
}

if (estaTodoOk($sepuedeCargarDatos)) {
	$conn = getConnection();

	$sqlimagen="UPDATE fotos, grupos SET fotos.RUTA=:newruta WHERE fotos.ID_FOTO=grupos.ID_FOTO AND grupos.ID_GRUPO=:estegrupo";
	$resultadoimagenes=$conn->prepare($sqlimagen);
	$resultadoimagenes->execute(array(":newruta"=>$_FILES["archivo0"]['name'],":estegrupo"=>$_SESSION["GRUPO_ACTUAL"]));

	$sqlnombre="UPDATE grupos SET NOMBRE=:newnombre WHERE grupos.ID_GRUPO=:grupito";
	$resultadonombre=$conn->prepare($sqlnombre);
	$resultadonombre->execute(array(":newnombre"=>$_POST["nombre"],":grupito"=>$_SESSION["GRUPO_ACTUAL"]));

	closeConnection($conn);
}

	


function estaTodoOk($unArray){
	$resultado=true;
	foreach ($unArray as $value) {
		if ($value==false) {
			$resultado=false;
		}
	}
	return $resultado;

}
?>