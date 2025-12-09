<?php
// db.php
// Usamos getenv para obtener las variables que configuraremos en Render
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASSWORD') ?: ''; // Deja esto vacío por defecto para local si no tienes pass
$db_name = getenv('DB_NAME') ?: 'apoyomat';

// En Render (y Docker) a veces el puerto es necesario si no es el 3306 estandar, 
// pero usualmente con el host basta.

$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conexion->connect_error) {
    // Es buena práctica no mostrar el error técnico exacto en producción por seguridad,
    // pero para depurar déjalo así por ahora.
    die("Error de conexión: " . $conexion->connect_error);
}
?>
