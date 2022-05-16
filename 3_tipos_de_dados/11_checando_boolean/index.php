<?php

$a = true;

if(is_bool($a)) {
    echo "É um booleano 1 <br>";
}

if(is_bool(0)) {
    echo "é um booleano 2 <br>";
}
if(is_bool(false)) {
    echo "é um booleano 3 <br>";
}

if(0 == false) {
    echo "É considerado Falso! <br>";
}

?>