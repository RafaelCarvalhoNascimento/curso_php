<?php

$str = "Esta é uma string muito grande, ela tem vários caractreres";

for ($i=0; $i < strlen($str); $i++) {
    echo "$str[$i] <br>";
}