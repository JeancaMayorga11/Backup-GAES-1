<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['last_name'];
$documento = $_POST['documento'];
$curso = $_POST['curso'];
$fecha = $_POST['age'];
$sena = $_POST['sena'];
$adso = $_POST['adso'];


$actualizar = "UPDATE estudiante SET Nombres_estudiante='$nombre' , Apellidos_estudiante='$apellido' , Numero_documento='$documento'
, Curso='$curso' , Fecha_de_nacimiento='$fecha' , Estudiante_SENA='$sena' , Estudiante_ADSO='$adso' WHERE ID_estudiante='$id'";

$resultado=mysqli_query($conexion, $actualizar);


if($resultado){
    echo "<script>alert('Se han actualizado los cambios correctamente');
    window.location='/edicion.php';</script>";

}else {
    echo "<script>alert('No se pudieron actualizar los datos');window.history.go(-1);</script>";
}