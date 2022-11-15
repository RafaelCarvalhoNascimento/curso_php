<?php

    //EXERCÍCIO 50
    //Crie um array associativo com nomes e idades
    //imprima estes dados em uma tabela de html

    $pessoas = [
        "Matheus" => 29,
        "Alexia" => 25,
        "Pedro" => 24,
        "João" => 43,
    ];

?>

<table border="1">
    <tr>
        <th>Nome</th>    
        <th>Idade</th> 
    </tr>
    <?php foreach($pessoas as $nome => $idade):?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
