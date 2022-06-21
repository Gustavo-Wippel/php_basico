<?php 

    $cursos = array(
        array("PHP", "Desenvolvimento", 700),
        array("Java", "Desenvolvimento", 980),
        array("Photoshop", "Design", 500)
    );

    //echo $cursos[0][0]." ".$cursos[0][1]." ".$cursos[0][2];

    for($linha=0; $linha < count($cursos); $linha++){
       for($coluna=0; $coluna < count($cursos[0]); $coluna++){
            echo $cursos[$linha][$coluna]."<br>";
       }

       echo "<hr>";
    }
?>