<?php

    $cursos = array("HTML", "CSS", "Javascript", "PHP", "jQuery");

    array_push($cursos, "C#", "AngularJS", "Ionic");

    array_splice($cursos, 0, 1);

    for($indice=0; $indice < count($cursos); $indice++) {
        echo $cursos[$indice]."<hr>";
    }
?>