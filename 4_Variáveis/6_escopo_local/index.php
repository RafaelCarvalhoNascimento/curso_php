<?php

//variável fora da função (Escopo Global)
$x = 10;

echo "$x global <br>";

// A function não é auto executável ela precisa ser chamada.
function teste (){
    
    //Variável X em escopo local, não é afetada pelo global.
    $x = 5;

    echo "$x local <br>";
}

//Chamando a função teste.
teste();



?>
