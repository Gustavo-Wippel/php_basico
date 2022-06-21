<?php 

    $cursos = array("PHP" => "Desenvolvimento", 
                    "SEO" => "Marketing",
                    "PhotoShop" => "Design");

    foreach ($cursos as $curso => $area) {
        echo "Curso: ".$curso." pertence a área de: ".$area."<hr>";
    }

?>