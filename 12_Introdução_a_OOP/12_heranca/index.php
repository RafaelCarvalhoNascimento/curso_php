<?php

class Humano {

    public $idade = 29;

    public function falar () {
        echo "Olá Mundo! <br>";
    }

    private function gritar(){
       echo "PHP É MUITO BOM! <br>";
    }

    public function acessarGritar(){
        $this->gritar();
    }

    protected function falarbaixinho(){
        echo "La la la la la! <br>";
    }

    public function acessaFalarBaixinho(){
        $this->falarbaixinho();    
    }

}

class Programador extends Humano {



}

$ze = new Humano;

$ze->falar();
$ze->acessarGritar();

$matheus = new Programador;

echo $matheus->idade . "<br>";

$matheus->falar();
$matheus->acessarGritar();

$ze->acessaFalarBaixinho();
$matheus->acessaFalarBaixinho();
