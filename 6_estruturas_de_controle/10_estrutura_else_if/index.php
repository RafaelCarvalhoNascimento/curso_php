<?php

    if(10 > 5){
        echo "Entrou no if. <br>";
    } else if(10 > 6) {
        echo "Entrou no else if. <br>";
    }

    // Primeiro if false
    if(10 < 5){
        echo "Entrou no if 2. <br>";
    } else if(10 > 6) {
        echo "Entrou no else if 2. <br>";
    } else {
        echo "Entrou no else";
    }

    // tudo false
    if(10 < 5){
        echo "Entrou no if 2. <br>";
    } else if(10 < 6) {
        echo "Entrou no else if 2. <br>";
    } else {
        echo "Entrou no else 3";
    }

?>