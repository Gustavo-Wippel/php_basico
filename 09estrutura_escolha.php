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

        case "Java":
            echo "Linguagem de Desenvolvimento Web and Desktop"
        
        default:
        echo "Curso não cadastrado";
    }

?>