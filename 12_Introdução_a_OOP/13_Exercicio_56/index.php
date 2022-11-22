<?php

// EXERCÍCIO 56

// Crie uma classe Humano com algumas propriedades e o método Falar
// Crie uma outra classe Professor que herda de Humano, crie também as propriedades e métodos
// particulares desta classe
// Exiba os valores das propriedades da classe Pai e também utilize os métodos

class Humano {

    public $maos = 2;
    public $pernas = 2;

    public function falar(){
        echo "Olá eu sou um humano <br>";
    }

}

class Professor extends Humano {

    public $disciplina = "Matemática";

    public function estaLecionando(){
        echo "O professor está lecionando $this->disciplina! <br>";
    }

}

$marcos = new Humano;

$marcos->falar();
echo $marcos->pernas . "<br>";

$matheus = new Professor;

echo $matheus->maos . "<br>";

$matheus->estaLecionando();