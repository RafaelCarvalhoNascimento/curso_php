<?php
$carro = [
    'cor'=>'vermelha',
    'marca'=>'volvo',
    'portas'=>5, 
    'fabricacao'=>2017];

print_r($carro['cor'],);
echo '<br>';
print_r($carro['marca'],);

$cor = $carro['cor'];
$marca = $carro['marca'];

echo '<br>';
echo "O carro é da marca $marca e tem a cor $cor!"



?>