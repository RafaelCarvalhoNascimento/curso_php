<?php

$idade_a = 17;
$idade_b = 18;
$idade_c = 20;

$aluno_a = "Pedro";
$aluno_b = "Paulo";
$aluno_c = "Barnabé";

$ver_maioridade = 18;

$maioridade_a = "$aluno_a tem $idade_a anos, logo ele atingiu a maioridade! <br>";
$maioridade_b = "$aluno_b tem $idade_b anos, logo ele atingiu a maioridade! <br>";
$maioridade_c = "$aluno_c tem $idade_c anos, logo ele atingiu a maioridade! <br>";

echo "$aluno_a é maior de idade? <br>";
if($idade_a >= $ver_maioridade){
    echo $maioridade_a;
}
echo "<br>";

echo "$aluno_b é maior de idade? <br>";
if($idade_b >= $ver_maioridade){
    echo $maioridade_b;
} 
echo "<br>";

echo "$aluno_c é maior de idade? <br>";
if($idade_c >= $ver_maioridade){
    echo $maioridade_c;
} 
echo "<br>";

?>