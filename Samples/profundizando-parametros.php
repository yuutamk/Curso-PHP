<?php

// Funcion simple

/* function suma($a, $b){
    echo "la suma de $a + $b es: " . $a + $b . "\n";

} */

// Funcion con parametros por defecto
function suma($a = 1, $b = 1) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}


suma(1,2);
suma(5,8);
suma(7,22);




// Array unpacking

/* $arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];

$resultado = [...$arreglo1, ...$arreglo2];

var_dump($resultado); */

// Array unpacking para asignar paramertros en la funcion

/* function suma($a, $b) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

$numeros = [1, 2];
$numeros2 = [50, 20];
$numeros3 = [10000, 2];

suma(...$numeros);
suma(...$numeros2);
suma(...$numeros3); */

// Array unpacking para parametros dinamicos

function suma_infinita(...$params) {
    var_dump($params);

    /* $suma = 0;
    
    foreach ($params as $numero) {
        $suma += $numero;
    }

    echo "La sumatoria es: $suma \n"; */

}

suma_infinita(1, 2);
suma_infinita(1, 2, 3);
suma_infinita(100, 40, 2, 9, 3);

echo "\n";