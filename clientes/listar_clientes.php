<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin' && $_SESSION['tipo'] != 'secretaria') {
    header("Location: ../login/login.php");
    exit();
}

$resultado = $conexao->query("SELECT * FROM clientes ORDER BY nome");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

<meta charset="UTF-8">

<title>Clientes</title>
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

    padding:40px;

    color:var(--texto);

}


/* =========================================
   TÍTULO
========================================= */

h1{

    text-align:center;

    color:var(--marrom-escuro);

    font-size:30px;

    margin-bottom:25px;

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
   BOTÃO NOVO CLIENTE
========================================= */

.btn{

    display:inline-block;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color:var(--marrom-escuro);

    padding:12px 20px;

    border-radius:9px;

    text-decoration:none;

    font-weight:bold;

    transition:.25s;

    box-shadow:
        0 4px 10px rgba(58,31,18,.12);

}


.btn:hover{

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
   TABELA
========================================= */

table{

    width:100%;

    border-collapse:separate;

    border-spacing:0;

    background:var(--branco);

    border:2px solid var(--borda);

    border-radius:14px;

    overflow:hidden;

    box-shadow:
        0 10px 30px rgba(58,31,18,.15);

}


/* =========================================
   CABEÇALHO
========================================= */

th{

    background:var(--marrom-medio);

    color:var(--creme);

    padding:15px;

    font-size:15px;

    font-weight:bold;

    font-family:Arial, Helvetica, sans-serif;

    /* LINHAS ENTRE AS COLUNAS */
    border-right:1px solid var(--marrom-claro);

}


/* Remove a linha da última coluna */

th:last-child{

    border-right:none;

}


/* =========================================
   CÉLULAS
========================================= */

td{

    padding:12px;

    border-bottom:1px solid #E8D8B8;

    /* LINHAS ENTRE AS COLUNAS */
    border-right:1px solid #E8D8B8;

    color:var(--texto);

    font-family:Arial, Helvetica, sans-serif;

}


/* Remove a linha da última coluna */

td:last-child{

    border-right:none;

}


/* =========================================
   EFEITO AO PASSAR O MOUSE
========================================= */

tr{

    transition:.2s;

}


tr:hover{

    background:#FFF8DF;

}


/* =========================================
   LINKS DE AÇÃO
========================================= */

td a{

    text-decoration:none;

    font-weight:bold;

    font-family:Arial, Helvetica, sans-serif;

}


/* =========================================
   EDITAR
========================================= */

td a[href*="editar"]{

    color:var(--amarelo-escuro);

}


td a[href*="editar"]:hover{

    color:var(--marrom);

}


/* =========================================
   EXCLUIR
========================================= */

td a[href*="excluir"]{

    color:var(--marrom);

}


td a[href*="excluir"]:hover{

    color:var(--marrom-escuro);

}


/* =========================================
   RESPONSIVO
========================================= */

@media(max-width:800px){

    body{

        padding:20px;

    }

    h1{

        font-size:25px;

    }

    table{

        display:block;

        overflow-x:auto;

        white-space:nowrap;

    }

    th,
    td{

        padding:9px;

        font-size:13px;

    }

}

/* BOTÃO VOLTAR */

.btn-voltar{

    display:inline-block;

    margin-right:15px;

    background:var(--marrom);

    color:white;

    padding:12px 20px;

    border-radius:9px;

    text-decoration:none;

    font-weight:bold;

    transition:.25s;

    box-shadow:0 4px 10px rgba(58,31,18,.12);

}

.btn-voltar:hover{

    background:var(--marrom-medio);

    transform:translateY(-2px);

    box-shadow:0 6px 14px rgba(58,31,18,.18);

}

</style>

</head>

<body>

<h1>Clientes Cadastrados</h1>

<br>

<a href="javascript:history.back()" class="btn-voltar">
    <i class="fa-solid fa-arrow-left"></i> Voltar
</a>

<a class="btn" href="cadastrar_cliente.php">
    <i class="fa-solid fa-plus"></i> Novo Cliente
</a>

<br><br>

<table>

<tr>

<th>ID</th>

<th>Nome</th>

<th>CPF</th>

<th>Telefone</th>

<th>E-mail</th>

<th>Endereço</th>

<th>Ações</th>

</tr>

<?php while($cliente = $resultado->fetch_assoc()){ ?>

<tr>

<td><?= $cliente['id']; ?></td>

<td><?= htmlspecialchars($cliente['nome']); ?></td>

<td><?= htmlspecialchars($cliente['cpf']); ?></td>

<td><?= htmlspecialchars($cliente['telefone']); ?></td>

<td><?= htmlspecialchars($cliente['email']); ?></td>

<td><?= htmlspecialchars($cliente['endereco']); ?></td>

<td>

<a href="editar_cliente.php?id=<?= $cliente['id']; ?>">Editar</a> |

<a href="excluir_cliente.php?id=<?= $cliente['id']; ?>"
onclick="return confirm('Deseja excluir este cliente?')">
Excluir
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>