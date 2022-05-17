<?php
// Operadores de Comparação
// Igualdade: ==
// Identico a: ===
// Diferente de: !=
// Não identico a: !==
// Maior e Maior ou Igual a: > e >=
// Menor e Menor ou Igual a: < e <=

    if(3 == 3){
        echo "comparação verdadeira. <br>";
    } 

    echo "<br>";     

    if(3 == 4){
        echo "A comparação verdadeira. <br>";
    } else {
        echo "A comparação é falsa. <br>";
    }

    echo "<br>"; 

    $a = 12;
    $b = 12;
    $c = 100;

    if($a == $b){
        echo "A comparação entre $a e $b é verdadeira. <br>";
    } else {
        echo "A comparação entre $a e $b é falsa. <br>";
    }

    echo "<br>"; 

    if($a == $c){
        echo "A comparação entre $a e $c é verdadeira. <br>";
    } else {
        echo "A comparação entre $a e $c é falsa. <br>";
    }


?>