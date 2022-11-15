<?php

    $matheus = [
        "nome" => "Matheus",
        "idade" => 29,
        "profissao" => "Programador"
    ];

    $alexia = [
        "nome" => "Alexia",
        "idade" => 25,
        "profissao" => "Eng. Civil"
    ];

    //Sintaxe para Chave e Valor
    foreach($matheus as $carac => $value){
        echo "$carac => $value <br>";
    }

    //Sintaxe para Valor
    foreach($alexia as $value){
        echo "$value <br>";
    }