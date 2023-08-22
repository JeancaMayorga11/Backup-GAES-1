<?php
include("conexion.php");

$estudiantes = "SELECT * FROM estudiante";
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

    <div class="container-table container-table--edit">
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
            <div class="table__item"><?php echo $row["Nombres_estudiante"];?></div>
            <div class="table__item"><?php echo $row["Apellidos_estudiante"];?></div>
            <div class="table__item"><?php echo $row["Numero_documento"];?></div>
            <div class="table__item"><?php echo $row["Curso"];?></div>
            <div class="table__item"><?php echo $row["Fecha_de_nacimiento"];?></div>
            <div class="table__item"><?php echo $row["Estudiante_SENA"];?></div>
            <div class="table__item"><?php echo $row["Estudiante_ADSO"];?></div>
            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["ID_estudiante"];?>" class="table__item__link">Editar</a> |
                <a href="eliminar.php?id=<?php echo $row["ID_estudiante"];?>" class="table__item__link">Eliminar</a></div>
            <?php } mysqli_free_result($resultado);?>
    </div>
    <script src="confirmacion.js"></script>

    </body>
</html>
