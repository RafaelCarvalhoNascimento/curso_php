<?php

    $arr = [];

    for ($i = 10; $i <= 20; $i++){

        array_push($arr, $i);

        if ($i % 2 != 0){
            echo $i . "<br>";
        }
    }

    print_r($arr);

    echo "<br>";
    echo "<br>";
    echo "CORREÇÃO DO PROFESSOR <br>";

    $arrB = [];

    for ($i = 10; $i <= 20; $i++){
        array_push($arrB, $i);
    }

    print_r($arr);

    echo "<br>";

    for($i = 0; $i < count($arrB); $i++){
        if($arrB[$i] % 2 != 0){
            echo $arrB[$i] . "<br>";
        }
    }