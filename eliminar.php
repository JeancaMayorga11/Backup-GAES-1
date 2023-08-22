<?php
include("conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM elemento WHERE COD_elemento = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar){
    header("Location: index.php");
}else {
    echo "<script>alert('No se pudo eliminar el alquiler');window.history.go(-1);</script>";
}