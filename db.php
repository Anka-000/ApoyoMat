<?php
$conexion = new mysqli("localhost", "root", "21052002", "apoyomat");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
