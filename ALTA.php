<?php
$nuevo_u = $_POST["nuevo_usu"];
$nueva_c = $_POST["nueva_clave"];
$nombre = $_POST["nombre_real"];

$conexion = mysqli_connect("localhost", "root", "", "ejemplo");

// se crea la sentencia preparada para hacer el insert 
$sql = "INSERT INTO acceso (login, clave, nombre) VALUES ('$nuevo_u', md5('$nueva_c'), '$nombre')";

if (mysqli_query($conexion, $sql)) {
    echo "Usuario registrado correctamente. <a href='index.html'>Volver al Login</a>";
} else {
    echo "Error al registrar: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
