<?php

    function soma($a, $b, $c, $d){
        $r = $a - $b / $c * $d;
        echo '<br>';
        echo $r;
    }

    soma (1,2,3,4);
    soma (3,1,1,10);

    echo '<br>';

    // Resolução Professor

    $y = 10;
    $x = 5;
    $z = 9;

    $operacao = ($x - $z) / $y * $z;

    echo $operacao;
   
?>