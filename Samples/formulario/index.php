<!DOCTYPE html>
<html>
<head>
    <title>Formulario de usuario y contraseña</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Formulario de usuario y contraseña</h1>
        <form method="post" action="login.php">
            <p>
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" required>
            </p>
            <p>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </p>
            <p>
                <input type="submit" value="Ingresar">
            </p>
        </form>
    </div>
</body>
</html>
