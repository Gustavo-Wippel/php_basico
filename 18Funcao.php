<?php

    function mensagem($receivedAge, $receivedName) {
        if($receivedName == null){
            $receivedName = "Nome Padrão";
        }
        echo "Olá ".$receivedName.", sua idade é: ".$receivedAge;
    }

    mensagem(0,"");
?>