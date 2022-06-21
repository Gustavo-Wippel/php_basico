<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP e MySQL</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form method="POST" action="cadastrar.php">
        <input type="text" name="nomeCurso" placeholder="Curso" class="form-control">
        <input type="text" name="valorCurso" placeholder="Valor" class="form-control">
        <select name="nomeArea" class="form-control">
            <option>Banco de Dados</option>
            <option>Desenvolvimento</option>
            <option>Marketing</option>
            <option>Engenheria</option>
        </select>

        <input type="submit" value="Cadastrar" id="btnCadastrar" class="btn btn-primary">
    </form>

    <table class="table">
        <tr>
            <td>Curso</td>
            <td>Valor</td>
            <td>Área</td>
            <td>Editar</td>
            <td>Excluir</td>
            </tr>

        <?php 

            include("conexao.php");

            $sql = "SELECT * from cursos";

            $resultadoConsulta = mysqli_query($conexao, $sql);

            while($indice = mysqli_fetch_assoc($resultadoConsulta)) {
                echo "<tr>";
                    echo "<td>".$indice["nomeCurso"]."</td>";
                    echo "<td>".$indice["valorCurso"]."</td>";
                    echo "<td>".$indice["categoriaCurso"]."</td>";
                    echo "<td><a href='formulario.php?idCurso=".$indice["idCurso"]."'>Alterar</a></td>";
                    echo "<td><a href='excluir.php?idCurso=".$indice["idCurso"]."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>