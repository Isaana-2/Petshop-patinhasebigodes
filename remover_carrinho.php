<?php
session_start();

// Verifica se foi informado o produto
if (!isset($_GET['produto'])) {
    header("Location: carrinho.php");
    exit;
}

$produto = $_GET['produto'];

// Remove o produto do carrinho
if (isset($_SESSION['carrinho'][$produto])) {
    unset($_SESSION['carrinho'][$produto]);
}

// Se o carrinho ficou vazio, remove a sessão
if (isset($_SESSION['carrinho']) && empty($_SESSION['carrinho'])) {
    unset($_SESSION['carrinho']);
}

header("Location: carrinho.php");
exit;
?>