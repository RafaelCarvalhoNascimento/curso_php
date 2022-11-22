<?php

//EXERCICIO 55
// Crie uma classe Carro
// Crie algumas propriedades e também a propriedade velocidade_maxima
// crie o método setVelocidadeMaxima onde é possivel alterar a velocidade máxima do carro
// e também o getVelocidadeMaxima onde é possivel imprimir a velocidade do carro

class Carro {
    public $marca;
    public $cor;
    public $velocidade_maxima;

    function setVelocidadeMaxima($vel){
        $this->velocidade_maxima = $vel;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade máxima deste Carro é: $this->velocidade_maxima. <br> " ;
    }

}

$ferrari = new Carro;

$ferrari->marca = "Maranello";
$ferrari->cor = "Amarela";
$ferrari->setVelocidadeMaxima(300);

echo "A Ferrari $ferrari->marca, da cor $ferrari->cor.";

$ferrari->getVelocidadeMaxima();

