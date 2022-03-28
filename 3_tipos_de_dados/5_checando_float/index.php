<?php

//Aula para compreender a função is_float() que 
// faz a checagem de um numeral se é float ou não

$a = 2;
$b = 12.8;

if(is_float($a)){
    echo "O numeral $a é float <br>";
} else {
    echo "O numeral $a não é float <br>";
}

echo "<br>";

if(is_float($b)){
    echo "O numeral $b é float <br>";
} else {
    echo "O numeral $b não é float <br>";
}

?>