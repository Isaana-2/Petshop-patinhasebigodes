<?php

session_start();

include("../includes/conexao.php");
include("../login/verificar.php");

// Verifica se o usuário é administrador
if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != "admin") {
    header("Location: ../login/login.php");
    exit();
}


// ======================================================
// EXCLUIR PRODUTO
// ======================================================

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["excluir_id"])) {

    $id = intval($_POST["excluir_id"]);

    if ($id > 0) {

        // Busca a imagem antes de excluir
        $stmt = $conexao->prepare(
            "SELECT imagem FROM produtos WHERE id = ?"
        );

        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {

            $produto = $resultado->fetch_assoc();

            // Exclui o produto do banco
            $stmtDelete = $conexao->prepare(
                "DELETE FROM produtos WHERE id = ?"
            );

            $stmtDelete->bind_param("i", $id);

            if ($stmtDelete->execute()) {

                // ==================================================
                // EXCLUI A IMAGEM DO SERVIDOR
                // ==================================================

                if (!empty($produto["imagem"])) {

                    /*
                     * Seu código mostra a imagem assim:
                     *
                     * ../<?= $produto['imagem']; ?>
                     *
                     * Então usamos "../" para localizar o arquivo.
                     */

                    $caminhoImagem = "../" . $produto["imagem"];

                    if (file_exists($caminhoImagem)) {
                        unlink($caminhoImagem);
                    }
                }

                // Volta para a lista
                header("Location: lista_produtos.php?excluido=1");
                exit();

            } else {

                header("Location: lista_produtos.php?erro=1");
                exit();
            }

        } else {

            header("Location: lista_produtos.php?erro=produto_nao_encontrado");
            exit();
        }
    }
}


// ======================================================
// BUSCA OS PRODUTOS
// ======================================================

$sql = $conexao->query(
    "SELECT * FROM produtos ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Produtos</title>

  <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}


/* =========================================
   CORES
========================================= */

:root {

    --marrom-escuro: #3A1F12;
    --marrom: #5A2D18;
    --marrom-medio: #7A4528;
    --marrom-claro: #9A6038;

    --amarelo-escuro: #D99500;
    --amarelo: #F4B400;
    --amarelo-claro: #FFD966;

    --creme: #FFF9E8;
    --creme-claro: #FFFDF7;

    --branco: #FFFFFF;

    --borda: #E8C76A;

    --texto: #3A2418;
}


/* =========================================
   BODY
========================================= */

body {

    min-height: 100vh;

    background:
        linear-gradient(
            135deg,
            #FFF9E8,
            #FFE8A3
        );

    color: var(--texto);

}


/* =========================================
   CONTAINER
========================================= */

.container {

    width: 95%;

    max-width: 1200px;

    margin: 40px auto;

}


/* =========================================
   TÍTULO
========================================= */

h1 {

    text-align: center;

    margin-bottom: 30px;

    color: var(--marrom-escuro);

    font-size: 30px;

    font-family: Arial, Helvetica, sans-serif;

    position: relative;

}


h1::after {

    content: "";

    display: block;

    width: 75px;

    height: 5px;

    margin: 10px auto 0;

    border-radius: 10px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo-claro)
        );

}


/* =========================================
   TOPO
========================================= */

.topo {

    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 20px;

}


/* =========================================
   BOTÕES DO TOPO
========================================= */

.botao {

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color: var(--marrom-escuro);

    padding: 12px 20px;

    text-decoration: none;

    border-radius: 9px;

    font-weight: bold;

    font-family: Arial, Helvetica, sans-serif;

    transition: .25s;

    box-shadow:
        0 4px 10px rgba(58, 31, 18, .12);

}


.botao:hover {

    background:
        linear-gradient(
            90deg,
            #C98500,
            #E6A600,
            #F4C542
        );

    transform: translateY(-2px);

    box-shadow:
        0 6px 14px rgba(58, 31, 18, .18);

}


/* =========================================
   TABELA
========================================= */

table {

    width: 100%;

    border-collapse: separate;

    border-spacing: 0;

    background: var(--branco);

    border: 2px solid var(--borda);

    border-radius: 14px;

    overflow: hidden;

    box-shadow:
        0 10px 30px rgba(58, 31, 18, .15);

}


/* =========================================
   CABEÇALHO DA TABELA
========================================= */

th {

    background: var(--marrom-medio);

    color: var(--creme);

    padding: 15px;

    font-size: 15px;

    font-weight: bold;

    font-family: Arial, Helvetica, sans-serif;

}


/* =========================================
   CÉLULAS
========================================= */

td {

    padding: 12px;

    text-align: center;

    border-bottom: 1px solid #E8D8B8;

    color: var(--texto);

    font-family: Arial, Helvetica, sans-serif;

}


/* =========================================
   EFEITO NAS LINHAS
========================================= */

tbody tr {

    transition: .2s;

}


tbody tr:hover {

    background: #FFF8DF;

}


/* =========================================
   IMAGENS DOS PRODUTOS
========================================= */

img {

    width: 70px;

    height: 70px;

    object-fit: cover;

    border-radius: 10px;

    border: 2px solid var(--amarelo);

    padding: 2px;

    background: var(--creme);

}


/* =========================================
   BOTÃO EDITAR
========================================= */

.editar {

    background: var(--amarelo);

    color: var(--marrom-escuro);

    padding: 8px 15px;

    text-decoration: none;

    border-radius: 7px;

    display: inline-block;

    font-weight: bold;

    font-family: Arial, Helvetica, sans-serif;

    transition: .25s;

}


.editar:hover {

    background: var(--amarelo-escuro);

    transform: translateY(-2px);

}


/* =========================================
   BOTÃO EXCLUIR
========================================= */

.excluir {

    background: var(--marrom);

    color: var(--branco);

    padding: 8px 15px;

    border: none;

    border-radius: 7px;

    cursor: pointer;

    font-size: 14px;

    margin-left: 5px;

    font-weight: bold;

    font-family: Arial, Helvetica, sans-serif;

    transition: .25s;

}


.excluir:hover {

    background: var(--marrom-escuro);

    transform: translateY(-2px);

}


/* =========================================
   MENSAGENS
========================================= */

.mensagem {

    padding: 15px;

    margin-bottom: 20px;

    border-radius: 9px;

    text-align: center;

    font-weight: bold;

}


/* =========================================
   MENSAGEM DE SUCESSO
========================================= */

.sucesso {

    background: var(--amarelo-claro);

    color: var(--marrom-escuro);

    border: 1px solid var(--amarelo);

}


/* =========================================
   MENSAGEM DE ERRO
========================================= */

.erro {

    background: #F5DED5;

    color: var(--marrom-escuro);

    border: 1px solid #C58B70;

}


/* =========================================
   RESPONSIVO
========================================= */

@media (max-width: 700px) {

    .container {

        width: 94%;

        margin: 25px auto;

    }

    h1 {

        font-size: 25px;

    }

    .topo {

        flex-direction: column;

        gap: 15px;

        align-items: stretch;

    }

    .botao {

        text-align: center;

    }

    table {

        font-size: 13px;

        display: block;

        overflow-x: auto;

    }

    th,
    td {

        padding: 8px;

        white-space: nowrap;

    }

    img {

        width: 50px;

        height: 50px;

    }

    .editar,
    .excluir {

        display: block;

        margin: 5px 0;

        text-align: center;

    }

}

</style>

</head>

<body>

<div class="container">

    <h1>Lista de Produtos</h1>


    <!-- ==============================================
         MENSAGEM DE SUCESSO
    =============================================== -->

    <?php if (isset($_GET["excluido"])): ?>

        <div class="mensagem sucesso">
            Produto excluído com sucesso!
        </div>

    <?php endif; ?>


    <!-- ==============================================
         MENSAGEM DE ERRO
    =============================================== -->

    <?php if (isset($_GET["erro"])): ?>

        <div class="mensagem erro">
            Não foi possível excluir o produto.
        </div>

    <?php endif; ?>


    <div class="topo">

        <a
            href="cadastro_produto.php"
            class="botao"
        >
            Cadastrar Produto
        </a>


        <a
            href="painel_admin.php"
            class="botao"
        >
            Voltar
        </a>

    </div>


    <table>

        <tr>

            <th>ID</th>

            <th>Imagem</th>

            <th>Nome</th>

            <th>Categoria</th>

            <th>Preço</th>

            <th>Ações</th>

        </tr>


        <?php if ($sql && $sql->num_rows > 0): ?>


            <?php while ($produto = $sql->fetch_assoc()): ?>

                <tr>

                    <!-- ID -->

                    <td>
                        <?= $produto['id']; ?>
                    </td>


                    <!-- IMAGEM -->

                    <td>

                        <?php if (!empty($produto['imagem'])): ?>

                            <img
                                src="../<?= htmlspecialchars($produto['imagem']); ?>"
                                alt="<?= htmlspecialchars($produto['nome']); ?>"
                            >

                        <?php else: ?>

                            Sem imagem

                        <?php endif; ?>

                    </td>


                    <!-- NOME -->

                    <td>
                        <?= htmlspecialchars($produto['nome']); ?>
                    </td>


                    <!-- CATEGORIA -->

                    <td>
                        <?= htmlspecialchars($produto['categoria']); ?>
                    </td>


                    <!-- PREÇO -->

                    <td>

                        R$

                        <?= number_format(
                            $produto['preco'],
                            2,
                            ",",
                            "."
                        ); ?>

                    </td>


                    <!-- AÇÕES -->

                    <td>


                        <!-- EDITAR -->

                        <a
                            class="editar"
                            href="editar_produto.php?id=<?= $produto['id']; ?>"
                        >
                            Editar
                        </a>


                        <!-- EXCLUIR -->

                        <form
                            method="POST"
                            style="display:inline;"
                            onsubmit="return confirmarExclusao('<?= htmlspecialchars($produto['nome'], ENT_QUOTES); ?>');"
                        >

                            <input
                                type="hidden"
                                name="excluir_id"
                                value="<?= $produto['id']; ?>"
                            >

                            <button
                                type="submit"
                                class="excluir"
                            >
                                Excluir
                            </button>

                        </form>


                    </td>

                </tr>

            <?php endwhile; ?>


        <?php else: ?>


            <tr>

                <td colspan="6">
                    Nenhum produto cadastrado.
                </td>

            </tr>


        <?php endif; ?>


    </table>

</div>


<script>

function confirmarExclusao(nome) {

    return confirm(
        "⚠️ ATENÇÃO!\n\n" +
        "Você realmente deseja excluir o produto:\n\n" +
        nome +
        "\n\n" +
        "Essa ação não poderá ser desfeita."
    );

}

</script>


</body>

</html>