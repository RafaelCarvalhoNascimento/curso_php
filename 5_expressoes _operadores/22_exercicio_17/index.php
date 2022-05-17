<?php

    $a = 15;
    $b = 5;
    $c = "João";
    $d = "teste";
    $e = 1;
    $f = 2;
    $g = 3;

    if($a > $b && $c === $c){
        echo "Entrou no if 01";
    }

    if($d > $b && $e){
        echo "Entrou no if 02";
    }

    if($f == $g && $b >= $g){
        echo "Entrou no if 03";
    }

    if("teste" > 5 && 1){
        echo "Entrou no if 04";
    }



?>