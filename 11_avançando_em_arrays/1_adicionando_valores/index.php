<?php

// Adicionando valores aos índices do array

$arr = [];

print_r($arr);
echo "<br>";

$arr[0] = 10;

print_r($arr);
echo "<br>";

$arr[1] = 15;

print_r($arr);
echo "<br>";

$arr[5] = 25;

print_r($arr);
echo "<br>";

// Modificar valores 

$arr[1] += 55;

print_r($arr);
echo "<br>";

// Adicionando valores em Array associativo

$arrAssoc = [];

print_r($arrAssoc);
echo "<br>";

$arrAssoc["carro"] = "BMW";

print_r($arrAssoc);
echo "<br>";

$arrAssoc["avião"] = "Boeing747";

print_r($arrAssoc);
echo "<br>";

// Modificando valores em Array associativo

$arrAssoc["carro"] = "Ferrari";

print_r($arrAssoc);
echo "<br>";
