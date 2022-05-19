<?php

//Estrutura do for 
/*
    for (contador; condição; incremento) {
        Bloco de Instrução
    } 
*/
    $nome = "Rafael";

    for ($i = 0; $i < 10; $i++){

        if($i == 4){
            echo $nome . "<br>";
        } elseif($i == 6){
            echo "Pulou a instrução $i <br>";

            continue;
        } elseif ($i == 8){
            echo "Saiu do For!";
            break;
        }

        echo "testando for $i <br>";

    }