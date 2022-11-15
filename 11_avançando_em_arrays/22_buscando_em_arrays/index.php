<?php

    $arr = ["banana", "batata", "maçã", "pêra", "mamão"];

    if(in_array("batata",$arr)){
        echo "Há o item batata no Array <br>";
    } else {
        echo "Não há o item no Array <br>";
    }

    $b = "banana";

    if(in_array($b,$arr)){
        echo "Há o item banana no Array <br>";
    } else {
        echo "Não há o item no Array <br>";
    }
    

    if(in_array("teste",$arr)){
        echo "Há o item teste no Array <br>";
    } else {
        echo "Não há o item no Array <br>";
    }