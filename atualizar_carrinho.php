<?php
session_start();

if (!isset($_GET['produto']) || !isset($_GET['acao'])) {
    header("Location: carrinho.php");
    exit;
}

$produto = $_GET['produto'];
$acao = $_GET['acao'];

if (isset($_SESSION['carrinho'][$produto])) {

    switch ($acao) {

        case "mais":
            $_SESSION['carrinho'][$produto]['quantidade']++;
            break;

        case "menos":

            $_SESSION['carrinho'][$produto]['quantidade']--;

            if ($_SESSION['carrinho'][$produto]['quantidade'] <= 0) {
                unset($_SESSION['carrinho'][$produto]);
            }

            break;
    }

}

header("Location: carrinho.php");
exit;
?>