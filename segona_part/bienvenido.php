<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            padding: 20px;
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    echo "<h2>Bienvenido, " . htmlspecialchars($_SESSION['usuario']) . "</h2>";
    ?>
    <form method="post" action="cambiar_contrasena.php">
        <button type="submit">Cambiar contraseña</button>
    </form>
    <form method="post" action="LoginEncriptat2.php"> <!-- Cambiado el action aquí -->
        <button type="submit" name="cerrar_sesion">Cerrar sesión</button>
    </form>

</body>
</html>