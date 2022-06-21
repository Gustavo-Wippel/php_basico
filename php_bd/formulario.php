<?php 

include("conexao.php");

    $idCurso = $_GET["idCurso"];

    $sql = "SELECT * from cursos WHERE idCurso = $idCurso";

    $resultado = mysqli_query($conexao, $sql);

    while($indice = mysqli_fetch_assoc($resultado)){
        $curso = $indice["nomeCurso"];
        $valor = $indice["valorCurso"];
        $area = $indice["categoriaCurso"];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP & MySQL</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form method="POST" action="editar.php">
        <input type="hidden" name="idCurso" value="<?php echo $idCurso?>">
        <input type="text" name="nomeCurso" placeholder="Curso" value="<?php echo $curso?>"class="form-control">
        <input type="text" name="valorCurso" placeholder="Valor" value="<?php echo $valor?>" class="form-control">
        <select name="nomeArea" value="<?php echo $area?>" class="form-control">
            <option>Banco de Dados</option>
            <option>Desenvolvimento</option>
            <option>Marketing</option>
            <option>Engenheria</option>
        </select>

        <input type="submit" value="Atualizar" id="btnCadastrar" class="btn btn-primary">
    </form>
</body>
</html>