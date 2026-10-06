<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login - Patinhas e Bigodes</title>

    <link rel="stylesheet" href="../css/style.css">

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

    --amarelo-escuro:#D99500;
    --amarelo:#F4B400;
    --amarelo-claro:#FFD966;

    --creme:#FFF9E8;
    --branco:#FFFFFF;

    --borda:#E8C76A;

    --texto:#3A2418;

}


/* =========================================
   BODY
========================================= */

body{

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    background:
        linear-gradient(
            135deg,
            #FFF9E8,
            #FFE8A3
        );

    color:var(--texto);

}


/* =========================================
   CAIXA DE LOGIN
========================================= */

.login-box{

    width:400px;

    max-width:92%;

    background:var(--branco);

    padding:35px;

    border-radius:15px;

    border:2px solid var(--borda);

    box-shadow:
        0 10px 30px rgba(58,31,18,.18);

}


/* =========================================
   TÍTULO
========================================= */

.login-box h2{

    text-align:center;

    color:var(--marrom-escuro);

    font-size:28px;

    margin-bottom:25px;

    position:relative;

}


.login-box h2::after{

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
   INPUTS
========================================= */

.login-box input{

    width:100%;

    padding:13px;

    margin-bottom:16px;

    border:1px solid #D8C9A8;

    border-radius:8px;

    background:#FFFDF7;

    color:var(--texto);

    font-size:15px;

    outline:none;

    transition:.25s;

}


.login-box input:focus{

    border-color:var(--amarelo);

    box-shadow:
        0 0 0 3px rgba(244,180,0,.15);

}


.login-box input::placeholder{

    color:#8A796B;

}


/* =========================================
   BOTÃO ENTRAR
========================================= */

.login-box button{

    width:100%;

    padding:14px;

    margin-top:5px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color:var(--marrom-escuro);

    border:none;

    border-radius:9px;

    cursor:pointer;

    font-size:16px;

    font-weight:bold;

    transition:.25s;

    box-shadow:
        0 4px 10px rgba(58,31,18,.12);

}


.login-box button:hover{

    background:
        linear-gradient(
            90deg,
            #C98500,
            #E6A600,
            #F4C542
        );

    transform:translateY(-2px);

    box-shadow:
        0 6px 14px rgba(58,31,18,.18);

}


/* =========================================
   RESPONSIVO
========================================= */

@media(max-width:500px){

    .login-box{

        padding:25px;

    }

    .login-box h2{

        font-size:24px;

    }

}

</style>

</head>

<body>

<div class="login-box">

<h2>Entrar no Sistema</h2>

<form action="autenticar.php" method="POST">

<input
type="text"
name="usuario"
placeholder="Usuário"
required>

<input
type="password"
name="senha"
placeholder="Senha"
required>

<button type="submit">

Entrar

</button>

</form>

</div>

</body>

</html>