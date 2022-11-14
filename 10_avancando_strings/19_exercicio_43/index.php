<?php

//EXERCÍCIO 43
// Converta a seguinte string para array
// carro - navio - helicóptero - barco - jangada

$frase = "carro - navio - helicóptero - jangada - casa";

$arrayV = explode ("-", $frase);


for ($i=0 ; $i < count($arrayV) ; $i++) {
    print_r ($arrayV[$i]."<br>");
}


