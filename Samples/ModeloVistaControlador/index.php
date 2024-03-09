<?php
#INDEX: En el mostraremos la salida de las vistas al usuario y tamvien a traves de el enciamos las distintas acciones que el usuario envie al controlador.

#require() establece que el codigo del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. por ello, si el archivo especificado en la funcion require() no se encuentra saltara un error "PHP Fatal error" y el programa PHP se detendrá.


require_once "controlador/PlantillaControlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();



?>