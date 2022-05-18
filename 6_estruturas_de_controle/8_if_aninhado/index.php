<?php

// dois ifs true
if(10 > 2){
    echo "Entrou no primeiro If. <br>";

    if("teste" == "teste") {
        echo "Entrou no segundo if <br>";
    }
}

// primeiro if true / segundo if false executou o else do segundo if
if(10 > 2){
    echo "Entrou no primeiro If 2. <br>";

    if("teste" != "teste") {
        echo "Entrou no segundo if 2<br>";
    } else {
        echo "Entrou no Else do segundo IF 2 <br>";
    }
}

// primeiro if false / nao executa o segundo if pula direto para o else do primeiro if
if(10 < 2){
    echo "Entrou no primeiro If 3. <br>";

    if("teste" != "teste") {
        echo "Entrou no segundo if 3<br>";
    } else {
        echo "Entrou no Else do segundo IF 3 <br>";
    }
} else {
    echo "Entrou no Else do primeiro iF3 <br>";
}



?>