<?php

    $nome = 'Rafael';

    $idade = 36;

    $graduacao = "Analise e Desenvolvimento de Software";

    $estadoCivil = "Casado";

    if($estadoCivil == 'Casado'){
        $estadoCivilCheck = true;
    }



    echo "$nome , tem $idade anos é formado em $graduacao.";
    echo '<br>';

    if($estadoCivilCheck==true){
        echo "$nome é $estadoCivil";
    }
        

?>