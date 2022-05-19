<?php

    $arr = [];
    $i = 0;
    $n = 10;

    while ($n <= 100){

        $arr[$i] = $n;
        
        if($n == 30 || $n == 40){

            $n +=10;

            continue;

        }
        
        echo "Elemento da posição $i do Array é $arr[$i] <br>";

        $i++;

        $n +=10;

    }

