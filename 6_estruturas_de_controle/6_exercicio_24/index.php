<?php

    $a = 12;
    $b = "Roda";
    $c = 3.2;

    echo "Teste 1 <br>";
    if(is_int($a)){
        echo "A variável a= $a é do tipo Inteiro! <br><br>";
    } else {
        echo "A variável a= $a não é do tipo Inteiro! E sim " . gettype($a) . " ! <br><br>";
    }

    echo "Teste 2 <br>";
    if(is_int($b)){
        echo "A variável b= $b é do tipo Inteiro! <br><br>";
    } else {
        echo "A variável a= $b não é do tipo Inteiro! E sim " . gettype($b) . " ! <br><br>";
    }

    echo "Teste 3 <br>";
    if(is_int($c)){
        echo "A variável c= $c é do tipo Inteiro! <br><br>";
    } else {
        echo "A variável c= $c não é do tipo Inteiro! E sim " . gettype($c) . " ! <br><br>";
    }

?>