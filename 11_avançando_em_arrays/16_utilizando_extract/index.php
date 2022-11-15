<?php

    //Com a função extract podemos criar variáveis rapidamente de arrays associativos
    //O nome da chave será o nome da Variável
    //Se já houver uma variável com o nome da chave esta será sobrescrita

    $cor = "Azul";

    echo "$cor <br>";

    $arr = [
        "cor" => "vermelho",
        "forma" => "retangular",
        "material" => "aço"
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";
