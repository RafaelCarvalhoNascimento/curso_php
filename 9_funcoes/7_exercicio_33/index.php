<?php

    function criarNomeIdade($nome, $idade){
        if(is_string($nome) && is_int($idade)){  
            echo "Olá eu sou o $nome  e tenho $idade anos. <br>";
        } else {
            echo "Insira parâmetros validos de Nome e Idade";
        }
    }

    criarNomeIdade("Rafael", 36);
    
    criarNomeIdade(35, "Zé");

    

?>  