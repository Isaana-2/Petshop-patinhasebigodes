<?php
session_start();

// Cria o carrinho caso ele não exista
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

$nome = $_POST['nome'];
$preco = (float) $_POST['preco'];
$imagem = $_POST['imagem'];

// Se o produto já estiver no carrinho, aumenta a quantidade
if (isset($_SESSION['carrinho'][$nome])) {

    $_SESSION['carrinho'][$nome]['quantidade']++;

} else {

    $_SESSION['carrinho'][$nome] = [

        "nome" => $nome,
        "preco" => $preco,
        "imagem" => $imagem,
        "quantidade" => 1

    ];

}

// Volta para a página de produtos
header("Location: produtos.php");
exit;
?>