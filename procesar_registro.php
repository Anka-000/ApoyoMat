<?php
include("db.php");

$alumno = $_POST['alumno'];
$tutor = $_POST['tutor'];
$correo = $_POST['correo'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$telefono = $_POST['telefono'];
$grado = $_POST['grado'];

$sql = "INSERT INTO alumnos (nombre_alumno, nombre_tutor, correo, contrasena, telefono, grado_actual)
        VALUES ('$alumno', '$tutor', '$correo', '$password', '$telefono', '$grado')";

if ($conexion->query($sql)) {
    echo "<script>alert('Registro exitoso'); window.location='login.php';</script>";
} else {
    echo "Error: " . $conexion->error;
}
?>
