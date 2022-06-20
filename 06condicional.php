<?php 

    $media = 8.5;

    if($media == 10){
        echo "Parabéns, foi aprovado com nota máxima!!";
    }else if($media >= 9 ){
        echo "Ótimo";
    }else if($media >= 8){
        echo "Bom";
    }else if($media >= 7){
        echo "Levemente acima da média!!";
    }else if($media >= 6){
        echo "Na média!!";
    }else if($media >= 5){
        echo "Em recuperação";
    }else {
        echo "Reprovado!";
    }

?>