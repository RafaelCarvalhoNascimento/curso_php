<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// CONTEUDO DA AULA

$id = 5;
$nome = "Teclado Microsoft";
$descricao = "É novo e está na Caixa";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);
$stmt->bindParam(":id", $id);

$stmt->execute();