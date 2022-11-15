<?php

    $arr = [
        "nome" => "Matheus",
        "idade" => 29
    ];
       // pode se utilizar também o isset
    if(array_key_exists("nome", $arr)){
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }
    
    if(array_key_exists("profissão", $arr)){
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }