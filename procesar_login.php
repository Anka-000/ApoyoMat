<?php
session_start();
include("db.php");

// 1. Capturar datos
$correo = $_POST['correo'];
$password = $_POST['contrasena'];


// 2. Usar Sentencia Preparada (Mejora de Seguridad) y Nombre de Tabla Corregido
// La consulta ahora busca en la tabla 'alumnos' y usa un marcador (?) para el correo.
$sql = "SELECT id, nombre_alumno, grado_actual, contrasena FROM alumnos WHERE correo = ?";

// 3. Preparar y vincular
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $correo); // 's' indica que $correo es una cadena (string)
$stmt->execute();
$res = $stmt->get_result(); // Obtener el resultado de la consulta

if ($res->num_rows > 0) {
    // Usuario encontrado
    $usuario = $res->fetch_assoc();

    // 4. Verificar la Contraseña (Usando el nombre de columna 'contrasena')
    if (password_verify($password, $usuario['contrasena'])) {
        
        // 5. Crear Variables de Sesión (Usando nombres de columna correctos)
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['alumno'] = $usuario['nombre_alumno']; // Usar nombre_alumno
        $_SESSION['grado'] = $usuario['grado_actual'];   // Usar grado_actual

        echo "<script>alert('Bienvenido'); window.location='grados.html';</script>";

    } else {
        // Contraseña incorrecta
        echo "<script>alert('Contraseña incorrecta'); window.location='login.php';</script>";
    }

} else {
    // Correo no encontrado
    echo "<script>alert('Correo no registrado'); window.location='login.php';</script>";
}

$stmt->close();
// Si la conexión no se usa más: $conexion->close();
?>