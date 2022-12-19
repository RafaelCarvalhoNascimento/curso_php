<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db );

    // ASSUNTO DA AULA

    $table = "itens";
    $nome = "xícara";
    $descricao = "É uma xícara usada de cor azul";

    $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($q);

    $conn->close();