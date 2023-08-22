<?php

include("conexion.php");
include ("controlador.php");

$nombre = $_POST['name'];
$apellido = $_POST['last_name'];
$documento = $_POST['documento'];
$curso = $_POST['select'];
$fecha = $_POST['age'];
$sena = $_POST['aprendiz'];
$adso = $_POST['adso'];


$insertar = "INSERT INTO estudiante (Nombres_estudiante,Apellidos_estudiante,Numero_documento,Curso,Fecha_de_nacimiento,Estudiante_SENA,Estudiante_ADSO) VALUES ('$nombre','$apellido','$documento','$curso','$fecha','$sena','$adso')";


$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo "<script>alert('Se ha regitrado el estudiante con exito');
    </script>";

}else {
    echo "<script>alert('No se puedo registrar');window.history.go(-1);</script>";
}
