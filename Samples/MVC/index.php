<?php

#Index: En él mostraremos la salida de las vistas al usuario y también a traves de él enviaremos las distintas acciones que el usuario envie al controlador.

#Require(): Establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la función require() no se encuentra saltará un error "PHP Fatal error" y el programa PHP se dentendrá.

#La versión require_once(): Funcionan de la misma forma que sus respectivo, salvo que, al utilizar versión _once, se impide la carga de un mismo archivo más de una vez.

#Si requerimos el mismo código más de una vez corremos el riesgo de reclamaciones de variables, funciones o clases.


    require_once "controllers/controller.php";
    require_once "models/model.php";

    $mvc = new MvcController();
    $mvc -> plantilla();




?>