<?php
include("conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM estudiante WHERE ID_estudiante = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar){
    header("Location: edicion.php");    
}else {
    echo "<script>alert('No se pudo eliminar');window.history.go(-1);</script>";
}
