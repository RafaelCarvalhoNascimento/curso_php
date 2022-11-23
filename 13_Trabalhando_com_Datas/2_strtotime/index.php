<?php

    // Recebe uma string como parametro que é um texto sinalizando tempo
    // a função tenta interpretar e transformar em data
    // echo date("d/m//y",strtotime("+2years")); // 2 anos a mais

    $cincodias = strtotime("5 days");

    echo $cincodias . "<br>";

    $dataAtualMais5 = date("d/m/y", $cincodias);

    echo $dataAtualMais5. "<br>";