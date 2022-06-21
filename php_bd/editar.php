<?php 

    include("conexao.php");

    $id = $_POST["idCurso"];
    $nomeCurso = $_POST["nomeCurso"];
    $valor = $_POST["valorCurso"];
    $area = $_POST["nomeArea"];

    echo $id.$nomeCurso.$valor.$area;

    $sql = "UPDATE cursos SET nomeCurso='$nomeCurso', valorCurso=$valor, categoriaCurso='$area' WHERE idCurso=$id";

    mysqli_query($conexao, $sql);

    header("Location:index.php");
?>




