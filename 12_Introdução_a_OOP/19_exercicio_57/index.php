<?php

    class Cachorro {

        public $raca;
        public $cor;
        public $nome;
        
        function __construct($nome, $raca, $cor){

            $this->nome = $nome;
            $this->raca = $raca;
            $this->cor = $cor;

        }

        function apresentarTobi(){
            echo "$this->nome, é da raça $this->raca e tem a cor $this->cor. <br>";
        }

    }

    $tobi = new Cachorro("Tobi", "Beagle", "caramelo");

    $tobi->apresentarTobi();