<?php
include_once ('connect.php');

@session_start();
if (isset($POST['enviado'])) {
    $verifica1 = $_POST['nome'];
    $verifica1 = $_POST['senha'];

$Q = "SELECT * FROM usuarios WHERE login = '$verifica1' AND senha = '$verifica2'";
$result = mysqli_query($conn, $Q);
$usuario = mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0 && ($result) < 2) {
    header('Location: ./telaprincipal.php');
    exit();

} else {
    echo ("<script> <alert> usuário ou senha incorretos</alert> </script>");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
}
?>