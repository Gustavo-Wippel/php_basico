<?php 

    include("conexao.php");

    $nomeCurso = $_POST["nomeCurso"];
    $valorCurso = $_POST["valorCurso"];
    $nomeArea = $_POST["nomeArea"];
/*
    echo "Curso: ".$nomeCurso."<br>"
    ."Valor do Curso: ".$valorCurso."<br>"
    ."Área recorrente: ".$nomeArea;
*/
    $sqlInsert = "INSERT into cursos values (null,'$nomeCurso',$valorCurso,'$nomeArea')";

    mysqli_query($conexao, $sqlInsert);

    header("Location:index.php");

?>