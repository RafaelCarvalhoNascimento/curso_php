<?php
    // No PHP temos duas funções interessantes para aprender
    // func_get_args = retorna uma lista com os argumentos de uma função;
    // func_num_get = retorna o número de argumentos de uma função;


    function soma($a, $b){

        print_r(func_get_args());

        echo "<br>";

        echo func_num_args() . "<br>";

        return $a + $b;

    }

    soma(2,4);


?>