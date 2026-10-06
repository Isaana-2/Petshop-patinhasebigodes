<?php
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin' && $_SESSION['tipo'] != 'secretaria') {
    header("Location: ../login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Cliente</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}


/* =========================================
   CORES
========================================= */

:root{

    --marrom-escuro:#3A1F12;
    --marrom:#5A2D18;
    --marrom-medio:#7A4528;
    --marrom-claro:#9A6038;

    --amarelo-escuro:#D99500;
    --amarelo:#F4B400;
    --amarelo-claro:#FFD966;

    --creme:#FFF9E8;
    --creme-claro:#FFFDF7;

    --branco:#FFFFFF;

    --borda:#E8C76A;

    --texto:#3A2418;

}


/* =========================================
   BODY
========================================= */

body{

    min-height:100vh;

    background:
        linear-gradient(
            135deg,
            #FFF9E8,
            #FFE8A3
        );

    display:flex;

    justify-content:center;

    align-items:center;

    padding:30px;

}


/* =========================================
   CONTAINER
========================================= */

.container{

    width:600px;

    max-width:95%;

    background:var(--branco);

    padding:35px;

    border-radius:20px;

    border:2px solid var(--borda);

    box-shadow:
        0 10px 30px rgba(58,31,18,.15);

}


/* =========================================
   TÍTULO
========================================= */

h1{

    text-align:center;

    color:var(--marrom-escuro);

    margin-bottom:25px;

    font-size:30px;

    position:relative;

}


h1::after{

    content:"";

    display:block;

    width:75px;

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


/* =========================================
   LABEL
========================================= */

label{

    font-weight:bold;

    display:block;

    margin-top:16px;

    margin-bottom:6px;

    color:var(--marrom);

}


/* =========================================
   CAMPOS
========================================= */

input{

    width:100%;

    padding:13px;

    border:2px solid #E5D1A3;

    border-radius:9px;

    background:var(--creme-claro);

    color:var(--texto);

    font-size:15px;

    outline:none;

    transition:.25s;

}


/* =========================================
   FOCO
========================================= */

input:focus{

    border-color:var(--amarelo);

    box-shadow:
        0 0 0 3px rgba(244,180,0,.20);

    background:var(--branco);

}


/* =========================================
   BOTÃO CADASTRAR
========================================= */

button{

    width:100%;

    margin-top:28px;

    padding:15px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color:var(--marrom-escuro);

    border:none;

    border-radius:10px;

    cursor:pointer;

    font-size:17px;

    font-weight:bold;

    transition:.25s;

}


/* =========================================
   HOVER BOTÃO
========================================= */

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


/* =========================================
   BOTÃO VOLTAR
========================================= */

.voltar{

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


.voltar:hover{

    background:var(--marrom-medio);

    border-color:var(--marrom-medio);

    transform:translateY(-2px);

}


/* =========================================
   RESPONSIVO
========================================= */

@media(max-width:650px){

    body{

        padding:20px;

    }

    .container{

        padding:25px;

    }

    h1{

        font-size:25px;

    }

}

</style>>

</head>

<body>

<div class="container">

<h1>Cadastrar Cliente</h1>

<form action="salvar_cliente.php" method="POST">

<label>Nome Completo</label>
<input type="text" name="nome" required>

<label>CPF</label>
<input type="text" name="cpf" required>

<label>Telefone</label>
<input type="text" name="telefone" required>

<label>E-mail</label>
<input type="email" name="email" required>

<label>Endereço</label>
<input type="text" name="endereco" required>

<button type="submit">
Cadastrar Cliente
</button>

</form>

<a class="voltar" href="javascript:history.back()">
    ← Voltar
</a>

</div>

</body>
</html>