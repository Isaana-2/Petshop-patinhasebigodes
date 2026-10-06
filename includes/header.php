<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$base = (basename(dirname($_SERVER['PHP_SELF'])) == "servicos") ? "../" : "";

$quantidadeCarrinho = 0;

if (isset($_SESSION['carrinho'])) {

    foreach ($_SESSION['carrinho'] as $produto) {

        $quantidadeCarrinho += $produto['quantidade'];

    }

}

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Patinhas e Bigodes</title>


    <link
        rel="stylesheet"
        href="<?= $base ?>css/style.css?v=<?= time(); ?>"
    >


    <link
        rel="stylesheet"
        href="<?= $base ?>css/header.css?v=<?= time(); ?>"
    >


    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    >


    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

</head>


<body>


<!-- ==========================================
     TOPO
========================================== -->

<div class="top-bar">

    <div class="container">

        <div class="top-left">

            <span>

                <i class="fa-solid fa-phone"></i>

                (11) 99999-9999

            </span>


            <span>

                <i class="fa-solid fa-location-dot"></i>

                Patinhas e Bigodes

            </span>

        </div>


        <div class="top-right">

            <span>

                <i class="fa-solid fa-clock"></i>

                Seg - Sáb • 08:00 às 18:00

            </span>

        </div>

    </div>

</div>


<!-- ==========================================
     HEADER
========================================== -->

<header id="header">

    <div class="container">


        <!-- LOGO -->

        <a
            href="<?= $base ?>index.php"
            class="logo"
        >

            <img
                src="<?= $base ?>includes/img/logo.png"
                alt="Patinhas e Bigodes"
            >

        </a>


        <!-- ==================================
             BARRA DE PESQUISA
        =================================== -->

        <div class="barra-pesquisa">

            <i class="fa-solid fa-magnifying-glass"></i>


            <input
                type="text"
                id="pesquisa"
                placeholder="O que seu pet precisa?"
                autocomplete="off"
            >


            <!-- RESULTADOS -->

            <div id="resultado-pesquisa"></div>

        </div>


        <!-- ==================================
             MENU
        =================================== -->

        <nav id="menu">

            <a href="<?= $base ?>index.php">
                Início
            </a>


            <a href="<?= $base ?>produtos.php">
                Produtos
            </a>


            <a href="<?= $base ?>servicos/banho.php">
                Serviços
            </a>


            <a href="<?= $base ?>planos.php">
                Planos
            </a>


            <a href="<?= $base ?>sobre.php">
                Sobre
            </a>


            <a href="<?= $base ?>contato.php">
                Contato
            </a>

        </nav>


        <!-- ==================================
             AÇÕES
        =================================== -->

        <div class="header-actions">


            <a
                href="<?= $base ?>cadastro.php"
                class="btn-header"
            >

                Cadastro

            </a>


            <a
                href="<?= $base ?>carrinho.php"
                class="cart"
            >

                <i class="fa-solid fa-cart-shopping"></i>


                <?php if($quantidadeCarrinho > 0){ ?>

                    <span>
                        <?= $quantidadeCarrinho ?>
                    </span>

                <?php } ?>

            </a>


            <button id="menu-mobile">

                <i class="fa-solid fa-bars"></i>

            </button>


        </div>

    </div>

</header>


<!-- ==========================================
     JAVASCRIPT DA PESQUISA
========================================== -->

<script>

    const BASE_URL = "<?= $base ?>";

</script>


<script
    src="<?= $base ?>js/pesquisa.js?v=<?= time(); ?>"
></script>