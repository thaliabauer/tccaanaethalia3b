<?php
include('connect.php');

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO usuarios (nome, telefone, senha) VALUES ('$nome', '$telefone', '$senha')";

 $res = mysqli_query($conn, $sql);
  
    if (mysqli_affected_rows($coon) > 0) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    mysqli_close($conn);

?>
