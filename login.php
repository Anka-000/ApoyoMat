<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - ApoyoMat</title>
    <link rel="stylesheet" href="style.css">



    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8f0ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            width: 350px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            text-align: center;
        }

        .card h2 {
            margin-bottom: 15px;
            color: #004aad;
        }

        .card input {
            width: 90%;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        .card button {
            width: 95%;
            padding: 12px;
            background: #0077ff;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: 0.2s;
        }

        .card button:hover {
            background: #005ac7;
        }

        .card p {
            margin-top: 10px;
        }

        a {
            color: #0077ff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>


    <div class="card">
        <h2>Iniciar Sesión</h2>

        <form action="procesar_login.php" method="POST">
            <input type="email" name="correo" placeholder="Correo electrónico" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>

            <button type="submit">Entrar</button>
        </form>

        <p>¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
    </div>

</body>
</html>
