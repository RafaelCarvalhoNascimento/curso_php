<?php

$x = 10;

$y =& $x;

echo $x;
echo '<br>';
echo $y;
echo '<br>';

$y = 15;

echo "Atribuição após mudar a variável referenciada y";
echo '<br>';
echo $x;
echo '<br>';
echo $y;
echo '<br>';

$x = 20;

echo "Atribuição após mudar a variável referencia x";
echo '<br>';
echo $x;
echo '<br>';
echo $y;
echo '<br>';

?>