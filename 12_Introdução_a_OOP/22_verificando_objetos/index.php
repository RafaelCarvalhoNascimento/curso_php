<?php

    // is_object() = verifica se uma variável é um objeto 
    // get_class() = verifica a classe de um objeto
    // method_exists() = verifica se um método existe em um objeto

    class Humano {
        public function falar(){
            echo "Olá";
        }
    }

    $matheus = new Humano;

    $teste = 10;

    if(is_object($matheus)){
        echo "É um objeto. <br>";
    } else {
        echo "Não é um objeto. <br>";
    }

    if(is_object($teste)){
        echo "É um objeto. <br>";
    } else {
        echo "Não é um objeto. <br>";
    }

    echo "Matheus é da Classe " . get_class($matheus) . ". <br>";

    if(method_exists($matheus, "falar")){
        echo "Método existe. <br>";
    } else {
        echo "Método não existe. <br>";
    }

    if(method_exists($matheus, "caminhar")){
        echo "Método existe. <br>";
    } else {
        echo "Método não existe. <br>";
    }


