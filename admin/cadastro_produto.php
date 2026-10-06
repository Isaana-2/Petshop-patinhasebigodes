<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != "admin") {
    header("Location: ../login/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cadastrar Produto</title>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* ==============================
   CORES
============================== */

:root {

    --marrom-escuro: #3A1F12;
    --marrom: #5A2D18;
    --marrom-medio: #7A4528;
    --marrom-claro: #9A6038;

    --amarelo-escuro: #D99500;
    --amarelo: #F4B400;
    --amarelo-claro: #FFD966;

    --creme: #FFF9E8;
    --creme-escuro: #FFF0C2;

    --branco: #FFFFFF;

    --borda: #E8C76A;

    --texto: #3A2418;
}


/* ==============================
   BODY
============================== */

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


/* ==============================
   CONTAINER
============================== */

.container {

    width: 700px;

    max-width: 92%;

    margin: 50px auto;

    background: var(--branco);

    padding: 35px;

    border-radius: 20px;

    border: 2px solid var(--borda);

    box-shadow:
        0 10px 30px rgba(58, 31, 18, 0.15);

}


/* ==============================
   TÍTULO
============================== */

h1 {

    text-align: center;

    color: var(--marrom-escuro);

    font-size: 30px;

    margin-bottom: 30px;

    position: relative;

}

h1::after {

    content: "";

    display: block;

    width: 75px;

    height: 5px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo-claro)
        );

    border-radius: 10px;

    margin: 10px auto 0;

}


/* ==============================
   LABEL
============================== */

label {

    display: block;

    margin-top: 18px;

    margin-bottom: 6px;

    font-weight: bold;

    color: var(--marrom);

}


/* ==============================
   CAMPOS
============================== */

input,
textarea,
select {

    width: 100%;

    padding: 13px;

    margin-top: 3px;

    border: 2px solid #E5D1A3;

    border-radius: 9px;

    background: #FFFDF7;

    color: var(--texto);

    font-size: 15px;

    outline: none;

    transition: 0.25s;

}


/* ==============================
   FOCO DOS CAMPOS
============================== */

input:focus,
textarea:focus,
select:focus {

    border-color: var(--amarelo);

    box-shadow:
        0 0 0 3px rgba(244, 180, 0, 0.20);

    background: var(--branco);

}


/* ==============================
   TEXTAREA
============================== */

textarea {

    height: 120px;

    resize: vertical;

}


/* ==============================
   BOTÃO CADASTRAR
============================== */

button {

    margin-top: 28px;

    width: 100%;

    padding: 15px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color: var(--marrom-escuro);

    border: none;

    border-radius: 10px;

    cursor: pointer;

    font-size: 17px;

    font-weight: bold;

    transition: 0.25s;

}


/* ==============================
   HOVER BOTÃO
============================== */

button:hover {

    background:
        linear-gradient(
            90deg,
            #C98500,
            #E6A600,
            #F4C542
        );

    transform: translateY(-2px);

    box-shadow:
        0 7px 15px rgba(58, 31, 18, 0.20);

}


/* ==============================
   BOTÃO VOLTAR
============================== */

.voltar {

    display: block;

    margin-top: 20px;

    padding: 12px;

    text-align: center;

    text-decoration: none;

    color: var(--branco);

    background: var(--marrom);

    border: 2px solid var(--marrom);

    border-radius: 9px;

    font-weight: bold;

    transition: 0.25s;

}


/* ==============================
   HOVER VOLTAR
============================== */

.voltar:hover {

    background: var(--marrom-medio);

    border-color: var(--marrom-medio);

    transform: translateY(-2px);

}


/* ==============================
   CAMPO DE ARQUIVO
============================== */

input[type="file"] {

    padding: 10px;

    background: var(--creme);

    border-color: var(--borda);

}


/* Botão interno do campo de arquivo */

input[type="file"]::file-selector-button {

    background: var(--marrom);

    color: white;

    border: none;

    padding: 9px 14px;

    margin-right: 10px;

    border-radius: 7px;

    cursor: pointer;

    font-weight: bold;

}

input[type="file"]::file-selector-button:hover {

    background: var(--marrom-medio);

}


/* ==============================
   RESPONSIVO
============================== */

@media (max-width: 700px) {

    .container {

        margin: 25px auto;

        padding: 25px;

    }

    h1 {

        font-size: 25px;

    }

}

</style>

</head>


<body>


<div class="container">


    <h1>
        Cadastrar Produto
    </h1>


    <form
        action="salvar_produto.php"
        method="POST"
        enctype="multipart/form-data"
    >


        <label>
            Categoria
        </label>


        <select name="categoria" required>

            <option value="">
                Selecione
            </option>

            <option>
                Rações
            </option>

            <option>
                Sachês
            </option>

            <option>
                Petiscos
            </option>

            <option>
                Areia
            </option>

            <option>
                Higiene
            </option>

            <option>
                Brinquedos
            </option>

            <option>
                Acessórios
            </option>

            <option>
                Coleira
            </option>

        </select>



        <label>
            Nome
        </label>


        <input
            type="text"
            name="nome"
            required
        >



        <label>
            Descrição Curta
        </label>


        <textarea
            name="descricao"
            required
        ></textarea>



        <label>
            Descrição Completa
        </label>


        <textarea
            name="descricaoCompleta"
            required
        ></textarea>



        <label>
            Preço
        </label>


        <input
            type="number"
            step="0.01"
            name="preco"
            placeholder="Ex.: 49,90"
            required
        >



        <label>
            Imagem
        </label>


        <input
            type="file"
            name="imagem"
            accept="image/*"
            required
        >



        <button type="submit">

            🐾 Cadastrar Produto

        </button>


    </form>


    <a
        href="painel_admin.php?secao=produtos"
        class="voltar"
    >

        ← Voltar para Produtos

    </a>


</div>


</body>

</html>