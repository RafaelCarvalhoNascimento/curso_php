<?php

$dataNascimento = mktime(8,35,27, 8,11,1985);

echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date("d/m/Y", $dataNascimento);

echo $dataNascimentoFormatada . "<br>";