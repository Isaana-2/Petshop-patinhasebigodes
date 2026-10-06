<?php

include("../login/verificar.php");

if ($_SESSION['tipo'] != 'secretaria') {
    header("Location: ../login/login.php");
    exit();
}

/*
|--------------------------------------------------------------------------
| SEÇÃO ATUAL
|--------------------------------------------------------------------------
*/

$secao = $_GET['secao'] ?? 'inicio';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pet Shop - Secretaria</title>

    <link rel="stylesheet" href="css/painel.css">

</head>

<body>


<!-- ==================================================
     MENU LATERAL
================================================== -->

<aside class="sidebar">

    <div class="logo">

        <div class="logo-icon">🐾</div>

        <h1>Pet Shop</h1>

        <span>SECRETARIA</span>

    </div>


    <nav class="menu">


        <!-- PAINEL -->

        <a href="painel_secretaria.php?secao=inicio"
           class="<?= $secao == 'inicio' ? 'ativo' : '' ?>">

            <span class="icone">⌂</span>

            <span>Painel</span>

        </a>


        <!-- CLIENTES -->

        <a href="painel_secretaria.php?secao=clientes"
           class="<?= $secao == 'clientes' ? 'ativo' : '' ?>">

            <span class="icone">👤</span>

            <span>Clientes</span>

        </a>


        <!-- ANIMAIS -->

        <a href="painel_secretaria.php?secao=animais"
           class="<?= $secao == 'animais' ? 'ativo' : '' ?>">

            <span class="icone">🐶</span>

            <span>Animais</span>

        </a>


        <!-- COMPRAS -->

        <a href="painel_secretaria.php?secao=compras"
           class="<?= $secao == 'compras' ? 'ativo' : '' ?>">

            <span class="icone">🛒</span>

            <span>Compras</span>

        </a>


        <!-- SERVIÇOS -->

        <a href="painel_secretaria.php?secao=servicos"
           class="<?= $secao == 'servicos' ? 'ativo' : '' ?>">

            <span class="icone">✂️</span>

            <span>Serviços</span>

        </a>


        <!-- SAIR -->

        <a href="../login/logout.php">

            <span class="icone">↪</span>

            <span>Sair</span>

        </a>

    </nav>

</aside>



<!-- ==================================================
     CONTEÚDO PRINCIPAL
================================================== -->

<main class="conteudo">


    <!-- TOPO -->

    <header class="topbar">

        <div class="usuario">

            <div class="usuario-icon">
                👤
            </div>

            <span>
                <?php echo htmlspecialchars($_SESSION['nome']); ?>
            </span>

            <span class="seta">
                ⌄
            </span>

        </div>

    </header>



    <!-- ÁREA CENTRAL -->

    <section class="area">


        <?php if ($secao == 'inicio'): ?>


            <!-- ==================================================
                 PAINEL INICIAL
            ================================================== -->

            <div class="titulo">

                <h1>Painel da Secretaria</h1>

                <p>
                    Gerencie clientes, animais, serviços e compras.
                </p>

            </div>


            <div class="boas-vindas">

                <div class="boas-vindas-icone">
                    🐾
                </div>

                <div>

                    <h2>
                        Olá,
                        <?php echo htmlspecialchars($_SESSION['nome']); ?>!
                    </h2>

                    <p>
                        Utilize o menu lateral para acessar as funções
                        da secretaria do Pet Shop.
                    </p>

                </div>

            </div>


                    </div>

                </div>


            </div>



        <?php elseif ($secao == 'clientes'): ?>


            <!-- ==================================================
                 CLIENTES
            ================================================== -->

            <div class="titulo">

                <h1>Clientes</h1>

                <p>
                    Gerencie os clientes do Pet Shop.
                </p>

            </div>


            <div class="funcao">


                <div class="funcao-cabecalho">

                    <div class="funcao-icone">
                        👤
                    </div>


                    <div>

                        <h2>Gerenciamento de Clientes</h2>

                        <p>
                            Cadastre novos clientes ou visualize
                            os clientes cadastrados.
                        </p>

                    </div>

                </div>


                <div class="acoes">


                    <a href="../clientes/cadastrar_cliente.php"
                       class="acao">

                        <span>➕</span>

                        <div>

                            <strong>Cadastrar Cliente</strong>

                            <small>
                                Adicionar um novo cliente
                            </small>

                        </div>

                    </a>


                    <a href="../clientes/listar_clientes.php"
                       class="acao">

                        <span>👥</span>

                        <div>

                            <strong>Visualizar Clientes</strong>

                            <small>
                                Consultar clientes cadastrados
                            </small>

                        </div>

                    </a>


                </div>

            </div>



        <?php elseif ($secao == 'animais'): ?>


            <!-- ==================================================
                 ANIMAIS
            ================================================== -->

            <div class="titulo">

                <h1>Animais</h1>

                <p>
                    Gerencie os animais cadastrados.
                </p>

            </div>


            <div class="funcao">


                <div class="funcao-cabecalho">

                    <div class="funcao-icone">
                        🐶
                    </div>


                    <div>

                        <h2>Gerenciamento de Animais</h2>

                        <p>
                            Cadastre e visualize os animais
                            dos clientes.
                        </p>

                    </div>

                </div>


                <div class="acoes">


                    <a href="../animais/cadastrar_animal.php"
                       class="acao">

                        <span>➕</span>

                        <div>

                            <strong>Cadastrar Animal</strong>

                            <small>
                                Cadastrar um novo animal
                            </small>

                        </div>

                    </a>


                    <a href="../animais/listar_animais.php"
                       class="acao">

                        <span>🐾</span>

                        <div>

                            <strong>Visualizar Animais</strong>

                            <small>
                                Consultar animais cadastrados
                            </small>

                        </div>

                    </a>


                </div>

            </div>



        <?php elseif ($secao == 'compras'): ?>


            <!-- ==================================================
                 COMPRAS
            ================================================== -->

            <div class="titulo">

                <h1>Compras</h1>

                <p>
                    Registre e consulte as compras realizadas.
                </p>

            </div>


            <div class="funcao">


                <div class="funcao-cabecalho">

                    <div class="funcao-icone">
                        🛒
                    </div>


                    <div>

                        <h2>Gerenciamento de Compras</h2>

                        <p>
                            Registre novas compras ou consulte
                            as compras realizadas.
                        </p>

                    </div>

                </div>


                <div class="acoes">


                    <a href="../compras/fechar_compra.php"
                       class="acao">

                        <span>➕</span>

                        <div>

                            <strong>Fechar Compra</strong>

                            <small>
                                Registrar uma nova compra
                            </small>

                        </div>

                    </a>


                    <a href="../compras/listar_compras.php"
                       class="acao">

                        <span>🛒</span>

                        <div>

                            <strong>Visualizar Compras</strong>

                            <small>
                                Consultar compras realizadas
                            </small>

                        </div>

                    </a>


                </div>

            </div>



        <?php elseif ($secao == 'servicos'): ?>


            <!-- ==================================================
                 SERVIÇOS
            ================================================== -->

            <div class="titulo">

                <h1>Serviços</h1>

                <p>
                    Consulte os serviços oferecidos pelo Pet Shop.
                </p>

            </div>


            <div class="funcao">


                <div class="funcao-cabecalho">

                    <div class="funcao-icone">
                        ✂️
                    </div>


                    <div>

                        <h2>Serviços</h2>

                        <p>
                            Consulte os serviços e seus respectivos
                            preços.
                        </p>

                    </div>

                </div>


                <div class="acoes">


                    <a href="../servicos/listar_servicos.php"
                       class="acao">

                        <span>✂️</span>

                        <div>

                            <strong>Consultar Serviços</strong>

                            <small>
                                Visualizar serviços disponíveis
                            </small>

                        </div>

                    </a>


                </div>

            </div>



        <?php endif; ?>


    </section>

</main>

</body>

</html>