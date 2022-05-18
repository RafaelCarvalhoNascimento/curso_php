<?php

    $a = 2;
    $b = 60;
    $c = "3";
    $d = "teste";
    
    // Verificação com variável A
    if (is_int($a) || is_float($a)){
        $mult = $a * 2;

        if($mult > 100){
            echo $mult . " é maior que 100";
        } else { 
            echo $mult  . " não é maior que 100";
        }
    } else {
        echo "Nenhuma variável é um número.";
    }
        echo "<br>";

     // Verificação com variável B
     if (is_int($b) || is_float($b)){
        $mult = $b * 2;

        if($mult > 100){
            echo $mult  . " é maior que 100";
        } else { 
            echo $mult  . " não é maior que 100";
        }
    } else {
        echo "Nenhuma variável é um número.";
    }

    echo "<br>";

    // Verificação com variável C
    if (is_int($c) || is_float($c)){
        $mult = $c * 2;

        if($mult > 100){
            echo $mult . " é maior que 100";
        } else { 
            echo $mult  . " não é maior que 100";
        }
    } else {
        echo "Nenhuma variável é um número.";
    }

  
?>