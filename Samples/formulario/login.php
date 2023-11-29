<link rel="stylesheet" href="style.css">
<?php

// Definimos un array asociativo con los usuarios registrados y sus contraseñas
$users = [
    "juan" => "1234",
    "pedro" => "4567",
    "adriana" => "852741"
];

// Obtenemos los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Validamos los datos con el array de usuarios
if (isset($users[$username]) && $users[$username] == $password) {
    // Si el usuario y la contraseña son correctos, mostramos un mensaje de éxito
    echo "<div class='success'>Bienvenido, $username. Has ingresado a la cuenta con éxito.</div>";
} else {
    // Si el usuario o la contraseña son incorrectos, mostramos un mensaje de error
    echo "<div class='error'>El nombre de usuario o la contraseña son incorrectos. Inténtalo de nuevo.</div>";
}
