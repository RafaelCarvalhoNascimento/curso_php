<?php

    $dados = [
        3,
        "texto",
        3.14,
        true, 
        "casa", 
        -17, 
        "bola", 
        89, 
        "101", 
        "dezoito"];

    // o count retorna quantos índices tem o array    
    $x = count($dados);    

    $n = 0;

    while ($n < $x){
       
        if(is_string($dados[$n])){
            // no lugar de echo eu usei print_r e vi que não é necessário.
            echo $dados[$n] . "<br>";
        }

        $n++;
        
    }
    
   

    
  
    
    

       
?>