<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos Disponíveis</h1>
    <ul>
        <li>
            Produto 1 - R$ 50,00
            <form action="carrinho.php" method="post">
                <input type="hidden" name="produto" value="Produto 1">
                <input type="hidden" name="preco" value="50.00">
                <input type="number" name="quantidade" value="1" min="1">
                <button type="submit">Adicionar ao Carrinho</button>
            </form>
        </li>
        <li>
            Produto 2 - R$ 30,00
            <form action="carrinho.php" method="post">
                <input type="hidden" name="produto" value="Produto 2">
                <input type="hidden" name="preco" value="30.00">
                <input type="number" name="quantidade" value="1" min="1">
                <button type="submit">Adicionar ao Carrinho</button>
            </form>
        </li>
        <script>
        const botoesComprar = document.querySelectorAll('.botao-comprar');

        botoesComprar.forEach(botao => {
            botao.addEventListener('click', (event) => {
                event.preventDefault();
                const produto = botao.getAttribute('data-produto');
                const preco = botao.getAttribute('data-preco');
                adicionarAoCarrinho(produto, preco);
            });
        });

        function adicionarAoCarrinho(produto, preco) {
            console.log(`Produto "${produto}" adicionado ao carrinho por R$ ${preco}`);
        }
    </script>
    </ul>
</body>
</html>
