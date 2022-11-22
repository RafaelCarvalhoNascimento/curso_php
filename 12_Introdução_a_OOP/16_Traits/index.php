<?php

    trait Objeto {

        public function teste(){
            echo "Testanto Trait de Objeto";
        }

    }

    class Central {

        use Objeto;

    }

    $x = new Central;

    $x->teste();