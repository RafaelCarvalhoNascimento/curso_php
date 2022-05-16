<?php
// a variável estática é declarada com a instrução static
// o valor da mesma é mantido e alterado a cada execução de uma função
// É interessante este comportamento pois as variáveis de escopo
// local sempre são resetadas ao termino da função.

function teste(){
    $a = 0;
    $a++;

    echo "$a <br>";
}

teste();
teste();
teste();

function testestatic(){
    Static $a = 0;
    $a++;

    echo "$a <br>";
}

testestatic();
testestatic();
testestatic();

?>