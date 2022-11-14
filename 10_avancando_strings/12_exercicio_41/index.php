<?php
// EXERCICIO 41
// Transforme a String "este item está em promoção"
// em "Este item esté em PROMOÇÂO"
// OBS: Você pode separar as strings, mas não pode escrever
// em caixa alta ou baixa manualmente, só com funções 

$str1 = "este item esta em ";
$str2 = "promocao. <br>";


Echo ucfirst($str1).strtoupper($str2);
