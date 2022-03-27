<?php
    // Compreendendo palavras reservadas no PHP
    // ao tentar criar funções com as palavras reservadas o PHP nos aponta
    // um erro de sintaxe como na função abaixo.

    /*
    function echo () {
        return true;
    }

    function while() {
        return true;
    }*/

    // Já nesta função abaixo o nome da função não é um nome reservado
    // sendo assim o php entende e deixa executar a função

    function whileNew() {
        return true;
    }

?>