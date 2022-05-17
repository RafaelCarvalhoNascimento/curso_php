<?php
    //Operador AND &&

    if(5 > 10 && 10 > 5){ //false | true = false
        echo "Entrou no If 01";
    }

    if(50 > 10 && 10 > 5){ //true | true = true
        echo "Entrou no If 02";
    }

    if(50 > 10 && 10 > 500){ //true | false = false
        echo "Entrou no If 03";
    }

    if(50 < 10 && 10 < 500){ //false | false = false
        echo "Entrou no If 04";
    }

    



?>