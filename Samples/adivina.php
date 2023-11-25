<?php
// Generar el número secreto aleatorio
$numeroSecreto = rand(1, 20);

// Variables de estado del juego
$jugador1 = '';
$jugador2 = '';
$turnoActual = 1;
$intentos = 0;
$adivinado = false;

// Función para mostrar un mensaje y solicitar la entrada del jugador
function mostrarMensaje($mensaje) {
    echo $mensaje . "\n";
}

function solicitarEntrada($mensaje) {
    echo $mensaje . ": ";
    return readline();
}

// Pedir nombres de los jugadores
$jugador1 = solicitarEntrada("Jugador 1, ingresa tu nombre");
$jugador2 = solicitarEntrada("Jugador 2, ingresa tu nombre");

// Iniciar el juego
mostrarMensaje("Comienza el juego de Adivinar el Número Secreto");

while (!$adivinado) {
    $jugadorActual = ($turnoActual % 2 == 1) ? $jugador1 : $jugador2;
    $turnoActual++;

    mostrarMensaje("\nTurno de " . $jugadorActual);

    // Pedir al jugador que ingrese un número
    $numeroIngresado = intval(solicitarEntrada("Ingresa un número entre 1 y 20"));

    // Validar la entrada del jugador
    if ($numeroIngresado < 1 || $numeroIngresado > 20) {
        mostrarMensaje("¡Número inválido! Intenta nuevamente.");
        continue;
    }

    // Incrementar el contador de intentos
    $intentos++;

    // Comparar el número ingresado con el número secreto
    if ($numeroIngresado == $numeroSecreto) {
        mostrarMensaje("¡Felicidades, " . $jugadorActual . "! Adivinaste el número secreto (" . $numeroSecreto . ") en " . $intentos . " intentos.");
        $adivinado = true;
    } elseif ($numeroIngresado > $numeroSecreto) {
        mostrarMensaje("El número secreto es menor.");
    } else {
        mostrarMensaje("El número secreto es mayor.");
    }
}

// Preguntar si los jugadores desean jugar de nuevo
while (true) {
    $jugarDeNuevo = strtolower(solicitarEntrada("¿Desean jugar de nuevo? (s/n)"));

    if ($jugarDeNuevo == 's') {
        // Reiniciar el juego
        $numeroSecreto = rand(1, 20);
        $turnoActual = 1;
        $intentos = 0;
        $adivinado = false;
        mostrarMensaje("\nComienza un nuevo juego");
        break;
    } elseif ($jugarDeNuevo == 'n') {
        // Salir del juego
        mostrarMensaje("Gracias por jugar. ¡Hasta luego!");
        break;
    } else {
        mostrarMensaje("Respuesta inválida. Por favor, ingresa 's' para jugar de nuevo o 'n' para salir.");
    }
}
?>
