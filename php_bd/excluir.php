<?php 

    include("conexao.php");

    $idCurso = $_GET["idCurso"];

    $sql = "DELETE from cursos WHERE idCurso = $idCurso";

    mysqli_query($conexao, $sql);

    header("Location:index.php");

?>