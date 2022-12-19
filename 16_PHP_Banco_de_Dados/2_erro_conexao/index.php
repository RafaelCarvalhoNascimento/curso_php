<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db );

if($conn->conect_errno){
    echo "Erro na conexão! <br>";
    echo "Erro: " . $conn->connect_error();
}

?>