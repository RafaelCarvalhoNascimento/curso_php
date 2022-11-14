<?php


$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strrpos($str, "strpos");

echo "$testeEncontrar <br>";

$p = substr($str, strpos($str,"strpos"), 6);

echo "$p <br>";