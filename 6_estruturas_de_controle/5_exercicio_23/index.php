<?php

$ver_maioridade = 18;
$maioridade = "atingiu a maioridade!";
$minoridade = "não atingiu a maioridade!";


$idade_a = 17;
$idade_b = 18;
$idade_c = 20;

$aluno_a = "Pedro";
$aluno_b = "Paulo";
$aluno_c = "Barnabé";


echo "$aluno_a é maior de idade? <br>";
if($idade_a >= $ver_maioridade){
    echo "$aluno_a tem $idade_a anos, logo ele $maioridade <br>";
} else {
    echo "$aluno_a tem $idade_a anos, logo ele $minoridade <br>";
}
echo "<br>";

echo "$aluno_b é maior de idade? <br>";
if($idade_b >= $ver_maioridade){
    echo "$aluno_b tem $idade_b anos, logo ele $maioridade <br>";
} else {
    echo "$aluno_a tem $idade_a anos, logo ele $minoridade <br>";
}
echo "<br>";

echo "$aluno_c é maior de idade? <br>";
if($idade_c >= $ver_maioridade){
    echo "$aluno_c tem $idade_c anos, logo ele $maioridade <br>";
} else {
    echo "$aluno_a tem $idade_a anos, logo ele $minoridade <br>";
}
echo "<br>";

?>