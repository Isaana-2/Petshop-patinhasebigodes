<?php

include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin') {
    header("Location: ../login/login.php");
    exit();
}

$secao = $_GET['secao'] ?? 'inicio';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pet Shop - Administrador</title>

    <link rel="stylesheet" href="../secretaria/css/painel.css">

</head>

<body>

<!-- =========================
     MENU LATERAL
========================= -->

<aside class="sidebar">

    <div class="logo">

        <div class="logo-icon">🐾</div>

        <h1>Pet Shop</h1>

        <span>ADMIN</span>

    </div>


    <nav class="menu">

        <a href="painel_admin.php?secao=inicio"
           class="<?= $secao == 'inicio' ? 'ativo' : '' ?>">

            <span class="icone">⌂</span>

            <span>Painel</span>

        </a>


        <a href="painel_admin.php?secao=clientes"
           class="<?= $secao == 'clientes' ? 'ativo' : '' ?>">

            <span class="icone">👤</span>

            <span>Clientes</span>

        </a>


        <a href="painel_admin.php?secao=animais"
           class="<?= $secao == 'animais' ? 'ativo' : '' ?>">

            <span class="icone">🐶</span>

            <span>Animais</span>

        </a>


        <a href="painel_admin.php?secao=produtos"
           class="<?= $secao == 'produtos' ? 'ativo' : '' ?>">

            <span class="icone">📦</span>

            <span>Produtos</span>

        </a>


        <a href="painel_admin.php?secao=servicos"
           class="<?= $secao == 'servicos' ? 'ativo' : '' ?>">

            <span class="icone">✂️</span>

            <span>Serviços</span>

        </a>


        <a href="painel_admin.php?secao=usuarios"
           class="<?= $secao == 'usuarios' ? 'ativo' : '' ?>">

            <span class="icone">👥</span>

            <span>Usuários</span>

        </a>


        <a href="painel_admin.php?secao=compras"
           class="<?= $secao == 'compras' ? 'ativo' : '' ?>">

            <span class="icone">🛒</span>

            <span>Compras</span>

        </a>


        <a href="painel_admin.php?secao=relatorios"
           class="<?= $secao == 'relatorios' ? 'ativo' : '' ?>">

            <span class="icone">📊</span>

            <span>Relatórios</span>

        </a>


        <a href="../login/logout.php">

            <span class="icone">↪</span>

            <span>Sair</span>

        </a>

    </nav>

</aside>


<!-- =========================
     CONTEÚDO PRINCIPAL
========================= -->

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

            <!-- =========================
                 INÍCIO
            ========================= -->

            <div class="titulo">

                <h1>Painel Administrativo</h1>

                <p>
                    Bem-vinda ao painel de administração do Pet Shop.
                </p>

            </div>


            <div class="boas-vindas">

                <div class="boas-vindas-icone">
                    🐾
                </div>

                <div>

                    <h2>
                        Olá, <?php echo htmlspecialchars($_SESSION['nome']); ?>!
                    </h2>

                    <p>
                        Utilize o menu lateral para acessar e gerenciar
                        as informações do Pet Shop.
                    </p>

                </div>

            </div>


           
                        
                    </div>

                </div>

            </div>


        <?php elseif ($secao == 'clientes'): ?>

            <!-- =========================
                 CLIENTES
            ========================= -->

            <div class="titulo">

                <h1>Clientes</h1>

                <p>
                    Gerencie os clientes cadastrados no Pet Shop.
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
                            os clientes já cadastrados.
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

            <!-- =========================
                 ANIMAIS
            ========================= -->

            <div class="titulo">

                <h1>Animais</h1>

                <p>
                    Gerencie os animais cadastrados pelos clientes.
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
                            Cadastre e consulte os animais do Pet Shop.
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


        <?php elseif ($secao == 'produtos'): ?>

            <!-- =========================
                 PRODUTOS
            ========================= -->

            <div class="titulo">

                <h1>Produtos</h1>

                <p>
                    Gerencie os produtos disponíveis no Pet Shop.
                </p>

            </div>


            <div class="funcao">

                <div class="funcao-cabecalho">

                    <div class="funcao-icone">
                        📦
                    </div>

                    <div>

                        <h2>Gerenciamento de Produtos</h2>

                        <p>
                            Cadastre, edite e consulte os produtos.
                        </p>

                    </div>

                </div>


                <div class="acoes">

                    <a href="cadastro_produto.php"
                       class="acao">

                        <span>➕</span>

                        <div>

                            <strong>Cadastrar Produto</strong>

                            <small>
                                Adicionar novo produto
                            </small>

                        </div>

                    </a>


                    <a href="lista_produtos.php"
                       class="acao">

                        <span>📦</span>

                        <div>

                            <strong>Gerenciar Produtos</strong>

                            <small>
                                Visualizar produtos cadastrados
                            </small>

                        </div>

                    </a>

                </div>

            </div>


        <?php elseif ($secao == 'servicos'): ?>

            <!-- =========================
                 SERVIÇOS
            ========================= -->

            <div class="titulo">

                <h1>Serviços</h1>

                <p>
                    Gerencie os serviços oferecidos pelo Pet Shop.
                </p>

            </div>


            <div class="funcao">

                <div class="funcao-cabecalho">

                    <div class="funcao-icone">
                        ✂️
                    </div>

                    <div>

                        <h2>Gerenciamento de Serviços</h2>

                        <p>
                            Consulte e gerencie os serviços cadastrados.
                        </p>

                    </div>

                </div>


                <div class="acoes">

                    <a href="../servicos/listar_servicos.php"
                       class="acao">

                        <span>✂️</span>

                        <div>

                            <strong>Gerenciar Serviços</strong>

                            <small>
                                Visualizar serviços cadastrados
                            </small>

                        </div>

                    </a>

                </div>

            </div>


        <?php elseif ($secao == 'usuarios'): ?>

            <!-- =========================
                 USUÁRIOS
            ========================= -->

            <div class="titulo">

                <h1>Usuários</h1>

                <p>
                    Gerencie os usuários que possuem acesso ao sistema.
                </p>

            </div>


            <div class="funcao">

                <div class="funcao-cabecalho">

                    <div class="funcao-icone">
                        👥
                    </div>

                    <div>

                        <h2>Gerenciamento de Usuários</h2>

                        <p>
                            Cadastre e consulte os usuários do sistema.
                        </p>

                    </div>

                </div>


                <div class="acoes">

                    <a href="cadastro_usuario.php"
                       class="acao">

                        <span>➕</span>

                        <div>

                            <strong>Cadastrar Usuário</strong>

                            <small>
                                Criar novo usuário
                            </small>

                        </div>

                    </a>


                    <a href="lista_usuarios.php"
                       class="acao">

                        <span>👥</span>

                        <div>

                            <strong>Gerenciar Usuários</strong>

                            <small>
                                Visualizar usuários cadastrados
                            </small>

                        </div>

                    </a>

                </div>

            </div>


        <?php elseif ($secao == 'compras'): ?>

            <!-- =========================
                 COMPRAS
            ========================= -->

            <div class="titulo">

                <h1>Compras</h1>

                <p>
                    Consulte as compras realizadas no Pet Shop.
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
                            Visualize as compras e os serviços realizados.
                        </p>

                    </div>

                </div>


                <div class="acoes">

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


        <?php elseif ($secao == 'relatorios'): ?>

            <!-- =========================
                 RELATÓRIOS
            ========================= -->

            <div class="titulo">

                <h1>Relatórios</h1>

                <p>
                    Consulte os relatórios do Pet Shop.
                </p>

            </div>


            <div class="funcao">

                <div class="funcao-cabecalho">

                    <div class="funcao-icone">
                        📊
                    </div>

                    <div>

                        <h2>Relatórios</h2>

                        <p>
                            Acesse os relatórios administrativos.
                        </p>

                    </div>

                </div>


                <div class="acoes">

                    <a href="relatorios.php"
                       class="acao">

                        <span>📊</span>

                        <div>

                            <strong>Visualizar Relatórios</strong>

                            <small>
                                Consultar informações do sistema
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