<?php

//Utilizando a função is_string() para verificar
// se uma variável ou um campo digitado é uma string!

$str = "Rafael";
$num = 36;

if(is_string($str)){
    echo "$str é uma string 1.<br>";
}

if(is_string($num)){
    echo "$num é uma string 2.<br>";
}

if(is_string("asd")){
    echo "É uma string 3.<br>";
}

?>