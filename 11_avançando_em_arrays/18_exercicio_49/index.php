<?php
    // EXERCÍCIO 49
    // Crie Variáveis com características de algum objeto ou animal
    // Depois crie um array com compact com estas mesmas variáveis
    // faça um loop no array e imprima os valores

    $marca = "Di Giorgio";
    $material = "Madeira de Carvalho";
    $cordamento = "Aço";
    $eletrico = true;

    $violao = compact("marca", "material", "cordamento", "eletrico");

    print_r($violao);
    echo "<br>";

   // for ($i = 0; $i < count($violao); $i ++){
   //     print_r(array_values($violao[$i]));
   //     echo "<br>";
   // }

    // RESOLUÇÃO DO PROFESSOR

    $marca = "Di Giorgio";
    $material = "Madeira de Carvalho";
    $cordamento = "Aço";
    $eletrico = true;

    $violao = compact("marca", "material", "cordamento", "eletrico");

    print_r($violao);
    echo "<br>";

    foreach($violao as $caracteristica => $value){
        echo "$caracteristica : $value <br>";
    }