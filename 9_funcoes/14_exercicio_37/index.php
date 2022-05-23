<?php

    function defineCorCarro1($color = "Vermelha"){

        $selectedColor = $color . "<br>";

        return $selectedColor;

    }

    echo defineCorCarro1();

    echo defineCorCarro1("Branca");

    // CORREÇÃO DO PROFESSOR

    function defineCorCarro($cor = "Vermelha") {

        return "A cor do carro é: $cor. <br>";

    }

    $carroVermelho = defineCorCarro();
    echo $carroVermelho . "<br>";

    $carroAzul = defineCorCarro("Azul");
    echo $carroAzul . "<br>";


?>