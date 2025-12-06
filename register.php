<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - ApoyoMat</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: #e9eef5;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .tarjeta {
            background: white;
            width: 380px;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        .tarjeta h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .grupo-input {
            margin-bottom: 18px;
            text-align: left;
        }

        .grupo-input label {
            display: block;
            margin-bottom: 5px;
            color: #444;
            font-weight: bold;
        }

        .grupo-input input, 
        .grupo-input select {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 15px;
            box-sizing: border-box; /* ← IMPORTANTE PARA QUE NO SE PEGUE AL BORDE */
        }

        .grupo-input input:focus {
            border-color: #007bff;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn:hover {
            background: #005ac1;
        }

        .volver {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            font-size: 14px;
            color: #007bff;
        }

        .volver:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="tarjeta">
        <h2>Registro de Alumno</h2>

        <form action="procesar_registro.php" method="POST">

            <div class="grupo-input">
                <label>Nombre del Alumno</label>
                <input type="text" name="alumno" required>
            </div>

            <div class="grupo-input">
                <label>Nombre del Padre o Tutor</label>
                <input type="text" name="tutor" required>
            </div>

            <div class="grupo-input">
                <label>Correo Electrónico</label>
                <input type="email" name="correo" required>
            </div>

            <div class="grupo-input">
                <label>Contraseña</label>
                <input type="password" name="password" required>
            </div>

            <div class="grupo-input">
                <label>Número de Teléfono (Opcional)</label>
                <input type="tel" name="telefono">
            </div>

            <div class="grupo-input">
                <label>Grado Actual</label>
                <select name="grado" required>
                    <option value="">Selecciona un grado</option>
                    <option value="1">1°</option>
                    <option value="2">2°</option>
                    <option value="3">3°</option>
                    <option value="4">4°</option>
                    <option value="5">5°</option>
                    <option value="6">6°</option>
                </select>
            </div>

            <button type="submit" class="btn">Registrarse</button>
        </form>

        <a href="login.php" class="volver">¿Ya tienes cuenta? Inicia sesión</a>
    </div>
</body>
</html>
