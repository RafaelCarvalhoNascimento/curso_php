<?php
    // foreach também é uma estrutura de repetição;
    // porém ela é orientada a um array, devemos utilizar um para que a 
    // estrutura repita em todos os elementos do mesmo;
    //Exemplo: 
    // foreach ($array as $item){ código }

    $nomes = ["Matheus", "João", "Pedro", "Maria"];
    
    foreach($nomes as $nome ) {
        echo "o nome do índice atual é $nome <br>";
    }

