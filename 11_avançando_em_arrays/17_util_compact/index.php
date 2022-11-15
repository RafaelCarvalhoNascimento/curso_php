<?php

    // com a função compact podemos criar um array a partir de variáveis
    // passamos para a função o nome das variáveis em string
    // e então um novo array é criado, podemos atribuir a uma variável

    $marca = "BMW";
    $motor = "3.0";
    $tetosolar = true;
    $portas = "5";

    $carro = compact("marca", "motor", "tetosolar", "portas");

    print_r($carro);
    echo "<br>";