<?php 

    $curso = "CSS";

    switch($curso) {
        case "HTML":
            echo "Linguagem de marcação WEB";
        break;

        case "CSS":
            echo "Linguagem de Estilização";
        break;

        case "php":
            echo "Linguagem de Desenvolvimento Web";
        break;

        default:
        echo "Curso não cadastrado";
    }

?>