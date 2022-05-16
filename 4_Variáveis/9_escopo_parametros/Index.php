<?php
// Os parâmetros de uma função são considerados um tipo de variável
// Este recurso nos ajuda a criar funções com valores dinâmicos
// Podendo alterá-los a cada invocação da mesma
// Podemos passar mais de um parâmetro para uma função

function soma($a, $b){
    echo $a + $b;
    echo '<br>';
}

soma (2,8);
soma (6,8);
soma(10,10);

?>