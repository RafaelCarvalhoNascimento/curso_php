<?php

    $a = 10;
     
    $b = 15;

    function testeEscopo(){
        $a = 5;

        global $b;

        $a++;

        $b++;

        echo "Escopo Local de A: $a. <br>";

        echo "Escopo Global de B na função: $b. <br>";
    }

    echo testeEscopo();

    echo "Escopo Global de A: $a. <br>";

    testeEscopo();

    echo "Escopo Global de B: $b. <br>";
?>