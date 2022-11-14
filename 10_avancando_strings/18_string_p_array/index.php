<?php

$frase = "Testando o explode";

$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo "<br>";

for($i=0; $i < count($fraseArray); $i++) {
    echo "$fraseArray[$i] <br>";
}

