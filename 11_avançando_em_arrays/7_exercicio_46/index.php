<?php

//EXERCÍCIO 46
// Crie um Array multidimensional com 3 arrays que tem 4 elementos cada
// Imprima todos os elementos de cada um dos arrays
// Imprima também quando ele mudar de array

    $arr = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
    ];

    for ($n = 0; $n < count($arr); $n++){

        if($n === 1 || $n === 2 ) {
            echo "estamos mudando para o array com índice $n. <br>"; 
        }

        for($i = 0; $i < count($arr[$n]); $i++){

            print_r($arr[$n][$i]);
            echo "<br>";
            
        }
    }


// Resolução do professor abaixo

    echo "RESOLUÇÃO DO PROFESSOR ABAIXO <br>";

    $arr2 = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
    ];

    for($i = 0; $i < count($arr2); $i++){

        echo "Imprimindo array externo: " . ($i + 1) . "<br>";

        for($j = 0; $j < count($arr2[$i]); $j++){

            echo $arr2[$i][$j] . "<br>";

        }
    }




