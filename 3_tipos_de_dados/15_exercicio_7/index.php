<?php

$pessoa = [
    'nome'=>'Rafael',
    'altura'=>'1,68', 
    'peso'=>'95', 
    'idade'=>36
];

$nome = $pessoa['nome'];
$maioridade = 18;

if($pessoa['idade'] >= $maioridade){
    echo "$nome, já alcançou sua maioridade.";
} 

?>