<?php 

    //4 parâmetros
    $url = "localhost";
    $usuario = "root";
    $password = "";
    $base_dados = "proway";

    //Conexão
    $conexao = mysqli_connect($url, $usuario, $password, $base_dados);

    $conexao->set_charset("utf8");

    //Verifica a conexão
    if(mysqli_connect_errno()) {
        echo "Falha: ".mysqli.connect.errno();
    } else {

    }


?>