<?php

// É declarada fora de funções
// Por padrão não são acessíveis dentro de funções
// precisamos utilizar a palavra global para isso


// Usando a variável no global em ifs e impressões
    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5>2){
        $teste ="dsa";
        echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

// Chamando a variável global dentro da function

    function funcao(){
        $teste ="xsxs";
        echo "$teste local <br>";
    }

    funcao();

    function testandoGlobal(){

        // chamando a variável teste do global para usar no local,
        // ou seja, dentro da função

        global $teste;
        echo "$teste global função<br>";

        // Quando uso a instrução global e altero o valor da variável
        // estou alterando seu valor global.
        $teste = 2;
    }

    testandoGlobal();

    echo $teste

       
?>