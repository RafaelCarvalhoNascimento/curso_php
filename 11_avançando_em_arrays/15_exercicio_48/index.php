<?php

    // Crie um array com os valores: Batata, Maçã, Pera, Feijão, Arroz
    // Remova Pera e Feijão

    $hortifruti = ["Batata", "Maçã", "Pera", "Feijão", "Arroz"];

    $comprei = array_splice($hortifruti, 2, -1);

    print_r($hortifruti);
    echo "<br>";

    print_r($comprei);
    echo "<br>";