<?php
session_start();

// Remove todos os produtos do carrinho
unset($_SESSION['carrinho']);

// Volta para o carrinho
header("Location: carrinho.php");
exit;
?>