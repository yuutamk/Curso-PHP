<?php
// Verificar si se ha enviado un formulario
if (isset($_POST['submit'])) {
    // Obtener el nombre ingresado en el formulario
    $nombre = $_POST['nombre'];

    // Establecer una cookie con el nombre ingresado
    setcookie("nombre_cookie", $nombre, time() + 20); // Cookie válida por 1 hora
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de uso de cookies en PHP</title>
</head>
<body>
    <?php
    // Verificar si la cookie está establecida
    if (isset($_COOKIE['nombre_cookie'])) {
        $nombre = $_COOKIE['nombre_cookie'];
        echo "<p>Bienvenido de nuevo, $nombre!</p>";
    } else {
        echo '<p>Bienvenido! Por favor, ingresa tu nombre.</p>';
    }
    ?>

    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>