<?php

// Crie um array com números de 1 a 20;
// Crie um loop (for) para este array;
// Imprima apenas os pares;

    $arr = [];
    $i_a = 0;
    $n = 1;

    while ($n <= 20){
        $arr[$i_a] = $n;

        $i_a++;
        $n++;
    }

    for($i = 0; $i < count($arr); $i++){
        if(($arr[$i] % 2) == 0) {
            echo $arr[$i] . "<br>";
        }
    }