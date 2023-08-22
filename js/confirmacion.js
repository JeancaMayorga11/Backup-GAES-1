function confirmacion(e) {
    if (confirm("¿Está seguro de eliminar este alquiler registrado?")) {
        return true;
    } else {
        e.preventDefault();

    }
}
let linkDelete = document.querySelectorAll("Backend/Tabla.php");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click',confirmacion);
}