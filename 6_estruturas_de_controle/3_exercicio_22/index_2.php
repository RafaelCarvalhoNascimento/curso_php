<?php

$aluno = ["Pedro", "Paulo", "Barnabé"];
$idade = [17, 18, 20];
$ver_maioridade = 18;

$cont = 0;

$contAluno = count($aluno);

while($cont < $contAluno){
    echo $aluno[$cont] . " é maior de idade? <br>";
    if ($idade[$cont] >= $ver_maioridade ){
        echo $aluno[$cont] . " tem " . $idade[$cont] . " anos. Logo ele é maior de idade! <br>";
    } else {
        echo $aluno[$cont] . " tem " . $idade[$cont] . " anos. Logo ele não atingiu a maioridade! <br>";
    }

    $cont ++;
} 

?>