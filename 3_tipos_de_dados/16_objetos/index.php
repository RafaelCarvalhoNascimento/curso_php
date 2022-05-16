<?php

class Pessoa {
    function falar() {
        echo "Olá pessoal!";
    }
}

//Criando um novo Objeto 
$matheus = new Pessoa();

//Adicionando uma nova propriedade para a Pessoa
$matheus->nome = "Matheus" ;

echo $matheus->nome;

echo '<br>';

//chamando a função falar
$matheus->falar();



?>