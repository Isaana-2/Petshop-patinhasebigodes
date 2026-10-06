<?php
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin') {
    header("Location: ../login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuário</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}


/* ==============================
   CORES
============================== */

:root{

    --marrom-escuro:#3A1F12;
    --marrom:#5A2D18;
    --marrom-medio:#7A4528;
    --marrom-claro:#9A6038;

    --amarelo-escuro:#D99500;
    --amarelo:#F4B400;
    --amarelo-claro:#FFD966;

    --creme:#FFF9E8;
    --branco:#FFFFFF;

    --borda:#E8C76A;

    --texto:#3A2418;

}


/* ==============================
   BODY
============================== */

body{

    min-height:100vh;

    background:
        linear-gradient(
            135deg,
            #FFF9E8,
            #FFE8A3
        );

    color:var(--texto);

}


/* ==============================
   CONTAINER
============================== */

.container{

    width:500px;

    max-width:92%;

    margin:60px auto;

    background:var(--branco);

    padding:35px;

    border-radius:20px;

    border:2px solid var(--borda);

    box-shadow:
        0 10px 30px rgba(58,31,18,.15);

}


/* ==============================
   TÍTULO
============================== */

h1{

    text-align:center;

    color:var(--marrom-escuro);

    font-size:29px;

    margin-bottom:30px;

    position:relative;

}


h1::after{

    content:"";

    display:block;

    width:70px;

    height:5px;

    margin:10px auto 0;

    border-radius:10px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo-claro)
        );

}


/* ==============================
   LABEL
============================== */

label{

    font-weight:bold;

    display:block;

    margin-top:18px;

    margin-bottom:6px;

    color:var(--marrom);

}


/* ==============================
   INPUTS
============================== */

input,
select{

    width:100%;

    padding:13px;

    margin-top:3px;

    border:2px solid #E5D1A3;

    border-radius:9px;

    background:#FFFDF7;

    color:var(--texto);

    font-size:15px;

    outline:none;

    transition:.25s;

}


/* ==============================
   FOCO
============================== */

input:focus,
select:focus{

    border-color:var(--amarelo);

    box-shadow:
        0 0 0 3px rgba(244,180,0,.20);

    background:var(--branco);

}


/* ==============================
   BOTÃO CADASTRAR
============================== */

button{

    width:100%;

    padding:15px;

    margin-top:30px;

    border:none;

    border-radius:10px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color:var(--marrom-escuro);

    cursor:pointer;

    font-size:16px;

    font-weight:bold;

    transition:.25s;

}


/* ==============================
   HOVER BOTÃO
============================== */

button:hover{

    background:
        linear-gradient(
            90deg,
            #C98500,
            #E6A600,
            #F4C542
        );

    transform:translateY(-2px);

    box-shadow:
        0 7px 15px rgba(58,31,18,.20);

}


/* ==============================
   LINK VOLTAR
============================== */

a{

    display:block;

    text-align:center;

    margin-top:20px;

    padding:12px;

    text-decoration:none;

    color:var(--branco);

    background:var(--marrom);

    border:2px solid var(--marrom);

    border-radius:9px;

    font-weight:bold;

    transition:.25s;

}


/* ==============================
   HOVER LINK
============================== */

a:hover{

    background:var(--marrom-medio);

    border-color:var(--marrom-medio);

    transform:translateY(-2px);

}


/* ==============================
   RESPONSIVO
============================== */

@media(max-width:600px){

    .container{

        margin:30px auto;

        padding:25px;

    }

    h1{

        font-size:25px;

    }

}

</style>

</head>

<body>

<div class="container">

<h1>Cadastrar Usuário</h1>

<form action="salvar_usuario.php" method="POST">

<label>Nome</label>

<input
type="text"
name="nome"
required>

<label>Usuário</label>

<input
type="text"
name="usuario"
required>

<label>Senha</label>

<input
type="password"
name="senha"
required>

<label>Tipo</label>

<select name="tipo">

<option value="admin">Administrador</option>

<option value="secretaria">Secretária</option>

</select>

<button type="submit">

Cadastrar

</button>

</form>

<a href="painel_admin.php">

← Voltar ao Painel

</a>

</div>

</body>

</html>