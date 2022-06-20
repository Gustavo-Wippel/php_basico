<?php

    /* 
        && -> E
        || > Ou
        ! > Não
    */

    $valor = 500;
    $pagamento = "a vista";

    if (($valor >= 100) && ($pagamento == "a vista")) {
        echo "Desconto de 10%!<br>"."Valor final da compra: ".$valor*0.90;
    } else {
        echo "Sem desconto.".$valor;
    }

?>