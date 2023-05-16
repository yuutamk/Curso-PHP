<?php

function es_estudiante_legend($conversa_rank) {
    
    if ($conversa_rank >= 20000) {
        echo "¡Eres un estudiante Legend!\n";
    }
    else {
        echo "Lo sentimos, aun no alcanzas el nivel legend\n";
    }

}

do {

    $conversa_rank_user = (int) readline("Por favor, dinos cual es tu Conversa Rank: ");

    es_estudiante_legend($conversa_rank_user);
    
} while(true);



echo "\n";