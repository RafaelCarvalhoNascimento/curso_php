<?php

    class Cachorro {
        function latir(){
            echo "AU! AU! <br>";
        }
        function andar(){
            echo "andar por ai <br>";
        }
    }

    $poodle = new Cachorro;

    $fila = new Cachorro;

    $poodle->latir();

    $fila->andar();