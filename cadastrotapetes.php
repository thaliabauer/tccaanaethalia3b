<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tapetes da Fabi</title>
  <link rel="stylesheet" href="stylee.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>


</head>
<body>
  <header>
    <h1>Tapetes da Fabi</h1> 
    <nav>
      <ul>
        <li><a href="#">Início</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Carrinho</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </nav>
  </header>

  <section id="destaques">
    <h2>Tapetes em destaques</h2>

    <form action="processa_cadastro.php" method="post" enctype="multipart/form-data">
      <div class="produto">

        <input type="text" name="nome" placeholder="Nome do tapete" required>
        <textarea name="descricao" placeholder="Descrição do tapete" required></textarea>
        <input type="number" name="valor" step="0.01" placeholder="Valor do tapete" required>
        <input type="number" name="quantidade" placeholder="Quantidade em estoque" required>
        <input type="file" name="imagem" accept="image/*" required>

        <button type="submit">Cadastrar</button>
      </div>
    </form>
  </section>
</body>
</html>
