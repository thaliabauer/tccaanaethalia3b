<?php
if (!isset($_COOKIE['carrinho'])) {

    $carrinho = array();
} else {

    $carrinho = unserialize($_COOKIE['carrinho']);
}

if (isset($_POST['adicionar_produto'])) {
    $produto = $_POST['adicionar_produto'];
    
    $carrinho[] = $produto;
    
    setcookie('carrinho', serialize($carrinho), time() + 3600, '/');
}

echo "Carrinho de Compras:<br>";
foreach ($carrinho as $produto) {
    echo "- $produto<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrinho de Compras</title>
</head>
<body>
   
        </select>
        <button type="submit">Adicionar ao Carrinho</button>
    </form>
</body>
</html>
