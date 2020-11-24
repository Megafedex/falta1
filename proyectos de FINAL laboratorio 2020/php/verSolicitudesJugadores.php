<?php
require_once("conexion.php");
session_start();

$conn = getConnection();

$sql= "SELECT g.NOMBRE AS gruponombre, f.RUTA, g.ID_GRUPO, u.NOMBRE, s.ID_USUARIO FROM solicitudes s, fotos f, grupos g, grupos_solicitudes gs, usuarios u, grupos_usuarios gu WHERE s.ESTADO_SOLICITUD=4 and s.ID_SOLICITUD=gs.ID_SOLICITUD AND gs.ID_GRUPO=g.ID_GRUPO AND s.ID_TIPO_S=2 AND f.ID_FOTO=g.ID_FOTO AND u.ID_USUARIO=gu.ID_USUARIO and g.ID_USUARIO_CREADOR=54 and gu.ID_GRUPO=g.ID_GRUPO";
$resultados=$conn->prepare($sql);

$resultados->execute(array(":idusuario"=>$_SESSION["ID_USUARIO"]));

$registros=$resultados->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($registros);

closeConnection($conn);
?>