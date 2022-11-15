<?php

// para ordenar pela chave asort / arsort
// para ordenar pelo valor da Chave usar o ksort / krsort

$arr = [
    "Matheus" => 29,
    "Pedro" => 18,
    "Joaquim" => 14,
    "Maria" => 12
];

asort($arr);

print_r($arr);
echo "<br>";