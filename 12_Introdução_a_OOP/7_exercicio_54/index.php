<?php

// EXERCICIO 54
// Crie uma classe Pessoa
// Crie a propriedade nome e idade
// E também um Método Andar

    class Pessoa {

        public $nome;
        public $idade;

        //function andar($nome, $idade, $m){
            // echo "$nome, tem $idade anos e andou $m metros hoje!";    RESOLUÇÃO MINHA 

        //}

        function andar($m){

            echo "A pessoa andou $m metros.";

        }

    }

    $rafael = new Pessoa;

    // $rafael->andar("Rafael", 37, 1000);

    // resolução do Professor

    $joao = new Pessoa;

    $joao->nome = "João";
    $joao->idade = 29;

    echo "O nome dele é $joao->nome e tem $joao->idade anos. <br>";

    $joao->andar(20);
