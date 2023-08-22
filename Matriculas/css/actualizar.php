<?php
include("conexion.php");
$id = $_GET["id"];

$estudiantes = "SELECT * FROM estudiante WHERE ID_estudiante = '$id'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bd.css">
</head>
<body>

    <form class="container-table container-table--edit" action="procesar.php" method="post">
        <div class="table__title table__title--edit">Datos de estudiante</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Apellido</div>
        <div class="table__header">Documento</div>
        <div class="table__header">Curso</div>
        <div class="table__header">Fecha de nacimiento</div>
        <div class="table__header">Aprendiz</div>
        <div class="table__header">ADSO</div>
        <div class="table__header">Operación</div>
        <?php $resultado = mysqli_query($conexion, $estudiantes);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <input type="hidden" class="table__item" value="<?php echo $row["ID_estudiante"];?>" name="id">

            <input type="text" class="table__input" value="<?php echo $row["Nombres_estudiante"];?>" name="nombre">
            <input type="text" class="table__input" value="<?php echo $row["Apellidos_estudiante"];?>" name="last_name">
            <input type="text" class="table__input" value="<?php echo $row["Numero_documento"];?>" name="documento">
            <input type="text" class="table__input" value="<?php echo $row["Curso"];?>" name="curso">
            <input type="text" class="table__input" value="<?php echo $row["Fecha_de_nacimiento"];?>" name="age">
            <input type="text" class="table__input" value="<?php echo $row["Estudiante_SENA"];?>" name="sena">
            <input type="text" class="table__input" value="<?php echo $row["Estudiante_ADSO"];?>" name="adso">
            <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">

            <?php } mysqli_free_result($resultado);?>

    </form>

    </body>
</html>
