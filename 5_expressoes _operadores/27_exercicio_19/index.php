<?php
// Converter os seguintes dados para int com o Operador de cast
// testando
// 12.9
// true
// [1,2,3]

$a = (int) "testando";

echo $a . "<br>";

$b = (int) 12.9;

echo $b . "<br>";

$c = (int) true;

echo $c . "<br>";

$d = (int) [1, 2, 3];

echo $d . "<br>";

?>