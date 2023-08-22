<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/controlador.css">
</head>
<body>

</body>
</html>

<?php
require_once('descuentos.php');
require_once('matricula.php');
require_once('curso.php');
require_once('estudiante.php');
require_once('insertar.php');



// Iniciarlizar varibles.
$edad = null;
$e_adso = "";
$d_edad = 0;
$d_adso = 0;
$d_sena = 0;
// Capturar datos.
$nombre = $_POST['name'];
$apellido = $_POST['last_name'];
$curso = $_POST['select'];
$fecha = $_POST['age'];
$aprendiz = intval($_POST['aprendiz']);
$adso = intval($_POST['adso']);
$identificacion = intval($_POST['documento']);
// Validar si pertenece a adso
if($adso == 1){
    $e_adso = "ADSO";
    if($aprendiz != 1){
        $e_adso = "No estudia ADSO";
    }
}else{
    $e_adso = "No estudia ADSO";
}
// Se validan los cursos seleccionados , debido a que no funciona al enviar el curso directamente al metodo asignar_Curso().
if($curso == "Python"){
    $cur = "Python";
}else if($curso == "PHP"){
    $cur = "PHP";
}else if($curso == "C#"){
    $cur = "C#";
}else if($curso == "Java"){
    $cur = "Java";
}

// Se crea  al estudiante.
$student = new Estudiante();
$edad = $student->calcular_Edad($fecha);
$datos = $student->crearEstudiante($nombre, $apellido, $fecha, $e_adso, $identificacion);

// Se crea asigna el curso.
$curso = new Curso();
$curso_asignado = $curso->asignar_Curso($cur);

// Se instancia objeto para validar los descuentos.
$descuento = new Descuentos();
$descuento->generar_Descuento($edad, $aprendiz, $adso, $curso_asignado[1]);
// Asignar descuentos retornados desde la clase a una lista.

$descuento_asignados = [$descuento->d_Edad(),$descuento->d_Pertenece(),$descuento->d_Addso()];

// Se instancia objeto de la clase matricula.
$matricula = new Matricula($datos[0],$datos[1],$curso_asignado[0],$curso_asignado[1],$e_adso);
$matricula->Mostrar_matricula();
// Se imprimen todos los datos generados por las clases creadas.

echo "<link rel='stylesheet' href='controlador.css'>";
echo "<center><div class='resul_01'>";
echo " <br>N° Documento: ".$identificacion;
echo "<br>Fecha Nacimiento: ".$fecha;
echo "<br>Edad: ".$edad;
echo "<br>Descuento del 15% por estudiar ADSO es de: $".$descuento_asignados[2];
echo "<br>Descuento general por ingresar al sena: $".$descuento_asignados[1];
echo "<br>Descuento por edad: $".$descuento_asignados[0];
echo "<br>Descuento total generado: $".($descuento_asignados[0]+$descuento_asignados[1]+$descuento_asignados[2]);
echo "<br>Total a pagar en la matricula: $".$curso_asignado[1]-($descuento_asignados[0]+$descuento_asignados[1]+$descuento_asignados[2]); ?>
