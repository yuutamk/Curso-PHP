<?php

functionclear() {

    if (PHP_OS === "WINNT")
        system("cls");
    else
        system("clear");

}

functioncheck_letters($word, $letter, $discovered_letters) {

    $offset = 0;
    while ( ( $letter_position = strpos($word, $letter, $offset) ) !== false ) {

        $discovered_letters[$letter_position] = $letter;
        $offset = $letter_position + 1;

    }

    return$discovered_letters;
    
}

functionprint_wrong_letter() {

    clear();
    $GLOBALS["attempts"]++;
    echo"Letra incorrecta 😾. Te quedan " . (MAX_ATTEMPTS - $GLOBALS["attempts"]) . " intentos.";
    sleep(2);

}

functionprint_man() {

    global$attempts;
    
    switch ($attempts) {

        case0:
            echo"
            +---+
            |   |
                |
                |
                |
                |
            =========
            ";
            break;
           
        case1:
            echo"
            +---+
            |   |
            O   |
                |
                |
                |
            =========
            ";
            break;

        case2:
            echo"
            +---+
            |   |
            O   |
            |   |
                |
                |
            =========
            ";
            break;

        case3:
            echo"
            +---+
            |   |
            O   |
           /|   |
                |
                |
            =========
            ";
            break;

        case4:
            echo"
            +---+
            |   |
            O   |
           /|\  |
                |
                |
            =========
            ";
            break;

        case5:
            echo"
            +---+
            |   |
            O   |
           /|\  |
           /    |
                |
            =========
            ";
            break;

        case6:
            echo"
            Me mataste we
            +---+
            |   |
            O   |
           /|\  |
           / \  |
                |
            =========
            ";
            break;

    }

    echo"\n\n";

}

functionprint_game() {

    global$word_length, $discovered_letters;

    print_man();

    echo"Palabra de $word_length letras: \n\n";
    echo$discovered_letters;
    echo"\n\n";

}

functionend_game() {

    global$attempts, $choosen_word, $discovered_letters;
    
    clear();

    if ($attempts < MAX_ATTEMPTS) {
        echo"¡Felicidades! Has adivinado la palabra. 😸 \n\n";
    }
    else {

        echo"Suerte para la próxima, amigo. 😿 \n\n";
        print_man();

    }

    echo"La palabra es: $choosen_word\n";
    echo"Tú descubriste: $discovered_letters\n";
    echo"Te sobraron : " .  MAX_ATTEMPTS - $attempts  ."intentos \n";

}

$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto", "Baldosa", "Terremoto", "Asteroide", "Gallo", "Conversa"];
define("MAX_ATTEMPTS", 6);


do{
echo"😼 ¡Jueguemos al ahorcado! \n\n";

// Inicializamos el juego
$choosen_word = $possible_words[ rand(0, 9) ];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attempts = 0;

do {

    // Damos la bienvenida al jugador
    print_game();

    // Pedimos que escriba
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    // Empezamos a validar
    if ( str_contains($choosen_word, $player_letter) ) {
        $discovered_letters = check_letters($choosen_word, $player_letter, $discovered_letters);
    }
    else {
        print_wrong_letter();
    }

    clear();

} while($attempts < MAX_ATTEMPTS && $discovered_letters != $choosen_word);

end_game();

echo"\n";

$jugar = readline("QUieres serguir jugando? presiones 1 para seguir junado, presione cualquier tecla para salir \n"); // preguntaos al usuario si desea jugar otra vez

}while($jugar == 1); // repetir mientras el usuario desee jugar