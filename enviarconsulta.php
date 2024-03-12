<?php
$nombre_form = $_POST ['nombre'];
$apellido_form = $_POST ['apellido'];
$correo_form = $_POST ['correo'];
$mensaje_form = $_POST ['mensaje'];

// Admin123! usuario: AMBAR
// $conexion = mysqli_connect("localhost", "root", "Admin123!", "id21765009_trabajoamba") or exit ('No se pudo conectar a la base de datos');//

$conexion = mysqli_connect("localhost", "id21765009_ambar", "", "prueba1") or exit ('No se pudo conectar a la base de datos');
$query = "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form' , '$apellido_form' , '$correo_form' , '$mensaje_form')";

$resultado = mysqli_query($conexion , $query);

if ($resultado) {
    header("Location:contacto.php?ok");
} else{
    echo "Error en la inseción" . mysqli_error($conexion);
}
mysqli_close($conexion);