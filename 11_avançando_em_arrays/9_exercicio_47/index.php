<?php

// Crie um Array, com os seguintes Valores: Jaguar, 3.0, 18, azul, Teto Solar
// Chame este array de carro
// Crie Variáveis com base neste array


$carro = ["Jaguar", "3.0", 18, "azul", "teto solar"];

print_r($carro);
echo "<br>";

list($marca, $motor, $roda, $cor, $opcional) = $carro;

echo "$marca <br>";
echo "$motor <br>";
echo "$roda <br>";
echo "$cor <br>";
echo "$opcional <br>";