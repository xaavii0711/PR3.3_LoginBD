<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['contrasenya'])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: LoginEncriptat2.php");
    exit;
}

// Comprobación de contraseña actual
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contrasena_actual = $_POST["contrasena_actual"];
    $nueva_contrasena = $_POST["nueva_contrasena"];
    $confirmar_contrasena = $_POST["confirmar_contrasena"];

    // Verifica si la contraseña actual coincide con la almacenada en la sesión
    if ($contrasena_actual == $_SESSION['contrasenya']) {
        // Verifica si las nuevas contraseñas coinciden
        if ($nueva_contrasena == $confirmar_contrasena) {
            // Guarda la nueva contraseña en la sesión (y opcionalmente en la base de datos)
            $_SESSION['contrasenya'] = $nueva_contrasena;

            // Muestra un mensaje de éxito
            echo "<p>Contraseña cambiada exitosamente.</p>";
        } else {
            echo "<p>Las nuevas contraseñas no coinciden.</p>";
        }
    } else {
        echo "<p>La contraseña actual es incorrecta.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canviar Contrassenya</title>
    <!-- Tu CSS aquí -->
</head>
<body>
    <h2>Canviar Contrasenya</h2>

    <form method="post" action="procesar_cambio_contrasena.php">
        <label for="contrasena_actual">Contraseña Actual:</label>
        <input type="password" id="contrasena_actual" name="contrasena_actual" required>
        <br>

        <label for="nueva_contrasena">Nueva Contraseña:</label>
        <input type="password" id="nueva_contrasena" name="nueva_contrasena" required>
        <br>

        <label for="confirmar_contrasena">Confirmar Nueva Contraseña:</label>
        <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" required>
        <br>

        <button type="submit">Guardar Cambios</button>

    </form>

    <form method="post" action="LoginEncriptat2.php"> <!-- Cambiado el action aquí -->
        <button type="submit" name="cerrar_sesion">Cerrar sesión</button>
    </form>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canviar Contrassenya</title>
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
    <h2>Canviar Contrasenya</h2>

    <form method="post" action="procesar_cambio_contrasena.php">
        <label for="contrasena_actual">Contraseña Actual:</label>
        <input type="password" id="contrasena_actual" name="contrasena_actual" required>
        <br>

        <label for="nueva_contrasena">Nueva Contraseña:</label>
        <input type="password" id="nueva_contrasena" name="nueva_contrasena" required>
        <br>

        <label for="confirmar_contrasena">Confirmar Nueva Contraseña:</label>
        <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" required>
        <br>

        <button type="submit">Guardar Cambios</button>

    </form>

    <form method="post" action="LoginEncriptat2.php">  Cambiado el action aquí -->
        <!-- <button type="submit" name="cerrar_sesion">Cerrar sesión</button>
    </form>

</html> --> 
