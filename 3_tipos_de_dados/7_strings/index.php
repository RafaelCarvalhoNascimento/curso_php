<?php

//Aula para compreensão do tipo de dado String
// o Php não diferencia aspas simples de duplas
// mas por convenção se começar um projeto com 
// aspas simples termine-o com simples.
// aspas duplas interpretam variáveis.

echo 'Testando String com aspas simples <br>';

echo "Testando String com aspas duplas <br>";

echo "Ele disse 'Ola!' <br>";

echo 'Ele disse "Ola!" <br>';

$idade = 15;

echo "Ele tem $idade anos! <br>";

echo 'Ele tem $idade anos! <br>'; // com aspas simples não interpreta variável

?>