<?php
include("conexion.php");
$id = $_GET["id"];

$elementos = "SELECT * FROM elemento WHERE COD_elemento = '$id'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/inicio.css">
		<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
<div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li class="active">
          <a href="#">
            <i class="bx bxs-home"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-user"></i>
            <span>Perfil</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-book-bookmark"></i>
            <span>Cita</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bx bxs-hard-hat"></i>
            <span>Servicio</span>
          </a>
        </li>
        <li>
          <a href="inventario.php">
            <i class="bx bxs-package"></i>
            <span>Inventario</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-log-out"></i>
            <span>Cerrar sesion</span>
          </a>
        </li>
      </ul>
    </div>
		<section class="main">
				<form class="container-table container-table--edit" action="procesar.php" method="post">
						<div class="table__title table__title--edit">Datos de estudiante</div>
						<div class="table__header">Nombre</div>
						<div class="table__header">Cantidad</div>
						<div class="table__header">Precio</div>
						
						<div class="table__header">Operación</div>
						<?php $resultado = mysqli_query($conexion, $elementos);
						while($row=mysqli_fetch_assoc($resultado)) { ?>
								<input type="hidden" class="table__item" value="<?php echo $row["COD_elemento"];?>" name="id">

								<input type="text" class="table__input" value="<?php echo $row["Nombre"];?>" name="name">
								<input type="text" class="table__input" value="<?php echo $row["Cantidad"];?>" name="cantidad">
								<input type="text" class="table__input" value="<?php echo $row["Precio"];?>" name="precio">
								
								<input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">

								<?php } mysqli_free_result($resultado);?>

				</form>
		</section>

</body>
</html>