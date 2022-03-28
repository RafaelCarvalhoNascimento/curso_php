<?php

echo "Exercício 4";

echo "<br>";

echo "- Crie um arquivo PHP.";

echo "<br>";

echo "- Imprima 3 números float.";

echo "<br>";

echo "- Utilize a função is_float em um deles";

echo "<br>=========================================<br>";

$a = 2.8;
$b = 3.6;
$soma = $a - $b;

echo "O primeiro numeral float é [ $a ]. <br>";

echo "O segundo numeral float é [ $b ]. <br>";

if(is_float($soma)){
    echo "O terceiro numeral float é a diferença entre o 
    numeral $a e o numeral $b que é [ $soma ].";
}




?>