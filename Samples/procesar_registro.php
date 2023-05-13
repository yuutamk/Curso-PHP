<?php
// Obtener la información enviada por el formulario
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];

// Procesar la información (por ejemplo, guardarla en una base de datos)
// ...

// Redirigir al usuario a una página de confirmación
/* header("Location: confirmacion.php");
exit; */

echo "Los datos de usuario son: usuario: $usuario, Correo: $email, Contraseña: $password"
?>