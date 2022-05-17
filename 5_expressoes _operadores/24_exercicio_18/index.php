<?php

    //comparação 1
    if(12 < 5 || "João" === "João"){ //false | true = true
        echo "Operação 1 é verdadeira! <br>";
    }

    //comparação 2
    if(1 > 5 || 1 ){ // false | true = true
        echo "Operação 2 é verdadeira! <br>";
    }

    //comparação 3
    if(20 === "20" || 51 >= 31 ){ //false | true = true
        echo "Operação 3 é verdadeira! <br>";
    }

    //comparação 4
    if((20 === "20" || 51 >= 31 ) && 6 < 3 ){ // (false | true) = true | false
        echo "Operação 4 é verdadeira! <br>";
    }

    //comparação 5
    if((20 === "20" && 51 >= 31 ) || 6 > 3 ){ // (false | true) = false | true
        echo "Operação 5 é verdadeira! <br>";
    }
?>