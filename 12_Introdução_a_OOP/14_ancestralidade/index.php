<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $marcos = new Humano;

    $turca = new Animal;

    $pedro = new Professor;

    if($marcos instanceof Humano) {
        echo "Marcos é um Humano! <br>";
    } else {
        echo "Marcos não é um Humano! <br>";
    }

    if($turca instanceof Humano) {
        echo "Turca é um Humano! <br>";
    } else {
        echo "Turca não é um Humano! <br>";
    }

    if($pedro instanceof Humano) {
        echo "Pedro é um Humano! <br>";
    } else {
        echo "Pedro não é um Humano! <br>";
    }

    if($pedro instanceof Professor) {
        echo "Pedro é um Professor! <br>";
    } else {
        echo "Pedro não é um Professor! <br>";
    }