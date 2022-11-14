<?php

// Na frase "Cadê o meu queijo? Ele estava aqui em cima."
// Resgate apenas a palavra queijo;

$str = "Cadê o meu queijo? Ele estava aqui em cima.";

$newStr = substr($str, 12, 6);
$newStr2= substr($str, 24, 6);

echo "A palavra que se destaca é $newStr. <br>";

echo "A outra palavra que se destaca é $newStr2. <br>";