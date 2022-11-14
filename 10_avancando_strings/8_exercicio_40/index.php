<?php

$str = "O Rato roeu a roupa do rei de Roma";
$cont_a=0;

for ($i=0; $i < strlen($str); $i++) {

    

    if ($str[$i]==="a") {
        $cont_a++;
    }

}

Echo "O número de letras A na strig é $cont_a.";
