<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="form-register">
        <center><h4>Registro</h4></center>
        <form action="controlador.php" method="post">
            <label for="">Digite el nombre del estudiante: </label><br><br>
            <input class="controls" type="text" placeholder="Nombre" name="name" required>
            <br>
            <br>
            <label for="">Digite los apellidos del estudiante: </label><br><br>
            <input class="controls" type="text" placeholder="Apellidos" name="last_name" required>
            <br>
            <br>
            <label for="">Digite N° Documento: </label><br><br>
            <input class="controls" type="number" placeholder="Digite el documento" name="documento" required>
            <br>
            <br>
            <label for=""> Cursos: </label><br>
            <br>
            <label for="">Python : $150.000</label><br>
            <label for="">PHP : $100.000</label><br>
            <label for="">C# : $180.000</label><br>
            <label for="">Java : $200.000</label><br>
            <br>
            <select class="controls" name="select" id="" required>
                <option name="curso" value="">Seleccione una opción</option>
                <option name="curso" value="PHP">Curso PHP</option>
                <option name="curso" value="Python">Curso Python</option>
                <option name="curso" value="C#">Curso C#</option>
                <option name="curso" value="Java">Curso Java</option>
            </select><br><br>
            <label for="">Digite la fecha de nacimiento: </label><br><br>
            <input class="controls" type="date" name="age" required>
            <br><br>
            <label for="">¿Es aprendiz SENA?: </label><br>
            <br>
            <input type="radio" name="aprendiz" value="Si">Aprendiz<br>
            <input type="radio" name="aprendiz" value="No">No Aprendiz
            <br>
            <br>
            <label for="">¿Pertenece a la formacion de ADSO?: </label>
            <br>
            <br>
            <input type="radio" value="Si" name="adso">Si pertenece a ADSO.<br>
            <input type="radio" value="No" name="adso">NO pertenece a ADSO.<br>
            <br>
            <input href="bd.php" class="botons" type="submit" name="registrar" value="Enviar">
        </form>
    </section>

</body>

</html>
