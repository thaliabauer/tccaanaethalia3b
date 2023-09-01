<?php
include_once("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    
    <title>Login</title>
</head>
<body>
<div class="main-login">
<div class="left-login">
        <h1>Faça seu login <br> E seja Bem Vindo(a)</h1>
        <form action="autentificar.php" method = "POST" class= "card-body"> 
        <img src="img/fotocapa.png" class="left-login-image" alt="sim">
    </div>
<div class="right-login">
<div class="card-login">
        <h1>LOGIN</h1>
<div class="textfield">
        <label for="usuario">Usuário</label>
        <input type="text" name="usuário" placeholder="usuário"> 
    </div>
<div class="textfield">
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="senha"> 
    </div>
        <button class="btn-login"><a href="telaprincipal.php">Login</a></button>
    </div>
</div>
</div>
</body>
</html>