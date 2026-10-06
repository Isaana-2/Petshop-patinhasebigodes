<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != "admin") {
    header("Location: ../login/login.php");
    exit();
}

function total($conexao, $tabela)
{
    $sql = "SELECT COUNT(*) AS total FROM $tabela";
    $resultado = $conexao->query($sql);

    if ($resultado) {
        return $resultado->fetch_assoc()['total'];
    }

    return 0;
}

$clientes  = total($conexao, "clientes");
$animais   = total($conexao, "animais");
$produtos  = total($conexao, "produtos");
$servicos  = total($conexao, "servicos");
$compras   = total($conexao, "compras");

$totalVendas = 0;

$sql = $conexao->query("SELECT SUM(valor) AS total FROM compras");

if ($sql) {

    $linha = $sql->fetch_assoc();

    if (!empty($linha['total'])) {
        $totalVendas = $linha['total'];
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Relatórios do Sistema</title>

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

    color:var(--texto);

}


/* =========================================
   CONTAINER
========================================= */

.container{

    width:90%;

    max-width:1200px;

    margin:40px auto;

}


/* =========================================
   TÍTULO
========================================= */

h1{

    text-align:center;

    color:var(--marrom-escuro);

    margin-bottom:35px;

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
   CARDS
========================================= */

.cards{

    display:grid;

    grid-template-columns:
        repeat(
            auto-fit,
            minmax(250px,1fr)
        );

    gap:20px;

}


/* =========================================
   CARD
========================================= */

.card{

    background:var(--branco);

    border-radius:14px;

    padding:30px;

    text-align:center;

    border:2px solid var(--borda);

    box-shadow:
        0 10px 30px rgba(58,31,18,.15);

    transition:.25s;

}


/* =========================================
   EFEITO CARD
========================================= */

.card:hover{

    transform:translateY(-5px);

    box-shadow:
        0 14px 35px rgba(58,31,18,.20);

    background:#FFFDF7;

}


/* =========================================
   TÍTULO DO CARD
========================================= */

.card h2{

    color:var(--marrom-medio);

    margin-bottom:15px;

    font-size:20px;

}


/* =========================================
   NÚMERO
========================================= */

.numero{

    font-size:45px;

    color:var(--amarelo-escuro);

    font-weight:bold;

}


/* =========================================
   BOTÃO VOLTAR
========================================= */

.voltar{

    display:block;

    width:230px;

    margin:40px auto;

    text-align:center;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color:var(--marrom-escuro);

    text-decoration:none;

    padding:15px;

    border-radius:9px;

    font-weight:bold;

    transition:.25s;

    box-shadow:
        0 4px 10px rgba(58,31,18,.12);

}


/* =========================================
   HOVER BOTÃO
========================================= */

.voltar:hover{

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

@media(max-width:700px){

    .container{

        width:94%;

        margin:25px auto;

    }

    h1{

        font-size:25px;

    }

    .cards{

        grid-template-columns:1fr;

    }

    .card{

        padding:25px;

    }

    .numero{

        font-size:40px;

    }

    .voltar{

        width:100%;

    }

}

</style>

</head>

<body>

<div class="container">

<h1>Relatórios do Sistema</h1>

<div class="cards">

<div class="card">
<h2>Clientes</h2>
<div class="numero">
<?php echo $clientes; ?>
</div>
</div>

<div class="card">
<h2>Animais</h2>
<div class="numero">
<?php echo $animais; ?>
</div>
</div>

<div class="card">
<h2>Produtos</h2>
<div class="numero">
<?php echo $produtos; ?>
</div>
</div>

<div class="card">
<h2>Serviços</h2>
<div class="numero">
<?php echo $servicos; ?>
</div>
</div>

<div class="card">
<h2>Compras</h2>
<div class="numero">
<?php echo $compras; ?>
</div>
</div>

<div class="card">
<h2>Total Vendido</h2>
<div class="numero">
R$ <?php echo number_format($totalVendas, 2, ",", "."); ?>
</div>
</div>

</div>

<a href="painel_admin.php" class="voltar">
Voltar ao Painel
</a>

</div>

</body>
</html>