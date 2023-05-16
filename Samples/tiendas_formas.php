<?php
$TiendaInicial = 0;
$TiendaSecundaria = 1;
$TiendaDeseada = 9;

for ($i = 2; $i <= $TiendaDeseada + 1; $i++) { #empiezo a validar desde la tienda 2
    
    $resultado = $TiendaInicial + $TiendaSecundaria;
    $TiendaInicial = $TiendaSecundaria;
    $TiendaSecundaria = $resultado;

    if ($TiendaDeseada == 1)  echo "tu ya estas en la tienda a la que necesitas llegar :V <br>";
    if ($i == $TiendaDeseada) echo "para llegar a la tienda " . $i . " se puede llegar de  " . $resultado . " maneras" . "<br>";          
}

/* $result = 1;
$number_store = readline("Escriba a que tienda desea llegar: ");

for ($i=1, $a=0; $i < $number_store; $i++) {
    $result += $a;
    $a = $result - $a;
}

echo "Para llegar a la tienda $number_store hay $result caminos diferentes"; */