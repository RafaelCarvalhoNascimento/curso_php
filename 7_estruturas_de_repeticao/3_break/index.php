<?php

    $x = 0;

    while ($x <= 10){
    
        echo "O X é $x . <br>";

        if($x === 5) {
            echo "Terminando o Loop! <br>";
        // a instrução break interrompe o Loop e segue as demais instruções.
        break;
        }

        $x++;

    }

    echo "Saiu do Loop. <br>";