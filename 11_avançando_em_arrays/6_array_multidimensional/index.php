<?php

    $arr = [
        [1, 2, 3],
        [2, 4, 6]
    ];

    print_r($arr);
    echo "<br>";

    echo $arr[0][1] . "<br>"; //acessando primeiro array segundo elemento

    echo $arr[1][2] . "<br>"; //acessando o segundo array, terceiro elemento

    echo count($arr) . "<br>"; //contando quantidade de elementos no array principal

    echo count($arr[0]) . "<br>"; //Quantidade de elementos no array 0

    echo count($arr[1]) . "<br>"; // quantidade de elementos no array 1
