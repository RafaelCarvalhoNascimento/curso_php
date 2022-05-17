<?php
// Estrutura Else

if (5 > 2){
    echo "Entrou no if 1. <br>";
} else {
    echo "Entrou no else 1. <br>";
}

if ("teste" === 5){
    echo "Entrou no if 2. <br>";
} else {
    echo "Entrou no else 2. <br>";
}

//variáveis

$a= 10;
$b= 20;

if ($a > $b){
    echo "Entrou no if 3. <br>";
} else {
    echo "Entrou no else 3. <br>";
}

$msg = "Entrou no else 4. <br>";

if ($a > $b){
    echo "Entrou no if 4. <br>";
} else {
    echo $msg;
}

?>