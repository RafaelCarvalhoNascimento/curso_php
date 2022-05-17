<?php

    $a = 5;
    $b = 2;
    $c = 12;
    $d = 11;
    $nome1 = "Matheus";
    $nome2 = "Pedro";
    $conclusao1 = "A expressão é Verdadeira! <br>";
    $verificacao1 = 0;
    $verificacao2 = 0;
    $verificacao3 = 0;
    
    echo "Verificação 1 <br> <br>";
    if($a > $b){
        echo $conclusao1;
        $verificacao1 = true;
    }
    echo "A variável (verificção 1) agora tem valor $verificacao1 . <br>";
    
    echo "<br>";
    
    echo "Verificação 2 <br> <br>";
    if($nome1 != $nome2){
        echo $conclusao1;
        $verificacao2 = true;
    }
    echo "A variável (verificção 2) agora tem valor $verificacao2 . <br>";

    echo "<br>";

    echo "Verificação 3 <br> <br>";
    if($c <= $d){
        echo $conclusao1;
        $verificacao3 = true;
    }
    echo "A variável (verificção 3) agora tem valor $verificacao3 . <br>";
    echo "<br>";

    echo "Verificação 4 <br> <br>";
    if($verificacao1 === $verificacao2){
        echo $conclusao1;
    }
    echo "<br>";

    echo "Verificação 5 <br> <br>";
    if($verificacao1 && $verificacao3){
        echo $conclusao1;
    }
    echo "<br>";

    echo "Verificação 6 <br> <br>";
    if($verificacao1 || $verificacao3){
        echo $conclusao1;
    }
    echo "<br>";

    echo "Verificação 7 <br> <br>";
    if(!($verificacao1 && $verificacao3)){
        echo $conclusao1;
    }
    echo "<br>";

    echo "Verificação 8 <br> <br>";
    if($verificacao1 && $verificacao2 && $verificacao3){
        echo $conclusao1;
    }
    echo "<br>";

    echo "Verificação 9 <br> <br>";
    if($verificacao1 || $verificacao2 || $verificacao3){
        echo $conclusao1;
    }
    echo "<br>";



    
    




?>