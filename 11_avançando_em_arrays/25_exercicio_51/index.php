<?php

    //EXERCÍCIO 51
    //Crie um array associativo com nomes como chaves e as uma pontuação como valores
    //ordene os dados do maior para o menor
    // Exiba uma lista simulando um ranking

    $classe = [
        "Matheus" => 8,
        "Fernando" => 10,
        "Elisa" => 9,
        "Fabiana" => 6,
        "Dilma" => 3,
    ];

    arsort($classe);

?>
<h1>Ranking</h1>
<ol>
    <?php foreach($classe as $nome => $nota): ?>
    <li><?Echo "$nome: $nota";?> </li>
    <?php endforeach; ?>
</ol>

//<ol>
//    <?php foreach($ranking as $pessoa => $pontuacao): ?>
//        <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
//    <?php endforeach; ?>
//</ol>
