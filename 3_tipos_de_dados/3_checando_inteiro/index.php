<?php

//Aula sobre verificação de número inteiro com a função
// is_int()

if(is_int(5)){ //true
    echo "É um inteiro <br>";
} 

if(is_int(4.2)){ //false
    echo "É um inteiro <br>";
} 

$n = 10;

if(is_int($n)){ //true
    echo "É um inteiro";
} else {
    echo "Não é um inteiro";
}

$n = 9.2;

if(is_int($n)){ //false
    echo "É um inteiro";
} else {
    echo "Não é um inteiro";
}

?>