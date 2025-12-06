<?php
require "db.php";
session_start();

$id_alumno = $_SESSION["id"];
$grado     = $_POST["grado"];
$puntaje   = $_POST["puntaje"];  // Puntaje final del grado

$columna = "puntaje_grado" . intval($grado);

$sql = "UPDATE alumnos SET $columna = ? WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ii", $puntaje, $id_alumno);

if ($stmt->execute()) {
    echo "Puntaje guardado";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
