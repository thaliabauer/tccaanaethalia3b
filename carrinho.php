<?php 
cookie_start();

if (!isset($_COOKIE['carrinho'])) {
    $_COOKIE['carrinho'] = array();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];

    $item = array(
        'produto' => $produto,
        'preco' => $preco
    );

    $_COOKIE['carrinho'][] = $item;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    
    <?php if (empty($_COOKIE['carrinho'])): ?>
        <p>O carrinho está vazio.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_COOKIE['carrinho'] as $item): ?>
                    <tr>
                        <td><?php echo $item['produto']; ?></td>
                        <td>R$ <?php echo number_format($item['preco'], 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>Total:</td>
                    <td>R$ <?php echo calcularTotal($_COOKIE['carrinho']); ?></td>
                </tr>
            </tfoot>
        </table>
        <button>Faça seu cadastro para efetuar a compra</button>
        <button>Já sou cadastrado</button>
    <?php endif; ?>

    <a href="telaprincipal.php">Continuar Comprando</a>
</body>
</html>

<?php
function calcularTotal($carrinho) {
    $total = 0;
    foreach ($carrinho as $item) {
        $total += $item['preco'];
    }
    return number_format($total, 2);
}
?>