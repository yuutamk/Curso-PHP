<?php
echo "¡Hola! Me podrias decir que hora es? \n";
echo "¡Claro!, son las ". obtener_hora();

function obtener_hora(){
    return date('h:i:s a'); 
}
?>