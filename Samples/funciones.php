<?php

function get_pokemon() {

    $numero_aleatorio = rand(1, 5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu\n";
            break;
        
        case 2:
            echo "Charmander\n";
            break;

        case 3:
            echo "Mewtwo\n";
            break;
        
        default:
            echo "Lo siento, no hay pokémon para ti :c\n";
    }

}

//get_pokemon();

/* for ($i=0; $i < 20; $i++) { 
    get_pokemon();
}
 */
echo "\n";

function saludar($nombre ='amigo(a)'){

    echo "Hola $nombre ¿como estas?<br>";
}
saludar('Alexa');
saludar();

function sumarNumeros($num1, $num2, $num3){
    return $num1 + $num2 + $num3;
}

$sumaTota1 = sumarNumeros(1,24,19);
echo "La suma total es: $sumaTota1";



function helados () {
  $helado = array("chocolate", "fresa", "vainilla", "chocochip", "menta");

  $random = array_rand($helado);

  if ($random <= 4)
      echo "Tu helado es de: " .$helado[$random];
  else
      echo "Se acabo el helado 😕";
  }


helados();

echo "\n";