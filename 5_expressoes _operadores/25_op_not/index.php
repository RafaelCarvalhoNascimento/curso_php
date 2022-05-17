<?php
// Operador Not inverte o resultado Booleano

    if(5 > 2) {
        echo "Operação 1 é verdadeira <br>";
    }

    if(!(5 > 2)) {
        echo "Operação 2 é verdadeira <br>";
    }

    $a = 10;
    $b = 20;

    if(!($a >= $b)){
        echo "A operação 3 é verdadeira <br>";
    }

?>