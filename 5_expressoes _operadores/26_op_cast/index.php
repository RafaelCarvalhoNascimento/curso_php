<?php
// Com os operadores de conversão podemos forçar uma variável ser
// de um determinado tipo

//os mais utilizados são para converter uma string em números

//Operadores int, bool, float, string, array, object e unset;

$a = (int) "12";

echo $a . "<br>";

echo $a + 10 . "<br>";

$b = (float) "3.14843824";

if($b === 3.14843824){
    echo "B é identico a 3.14 <br>";
}

?> 