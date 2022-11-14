<?php

// EXERCÍCIO 44
// Converta a seguinte Array para uma String:
// ["O","PHP","é","muito","legal"]

$arr = ["O", "PHP", "é", "muito", "legal"];

$str = implode(" ", $arr);

echo "A string é: $str. <br>";