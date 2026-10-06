<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin') {
    header("Location: ../login/login.php");
    exit();
}

$sql = "SELECT * FROM usuarios ORDER BY nome ASC";
$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Usuários</title>

<style>

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
    --linha:#E8D8B8;

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

    width:95%;

    max-width:1200px;

    margin:40px auto;

}


/* =========================================
   TÍTULO
========================================= */

h1{

    text-align:center;

    color:var(--marrom-escuro);

    font-size:30px;

    margin-bottom:30px;

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
   BOTÕES
========================================= */

.botoes{

    margin-bottom:20px;

    display:flex;

    gap:10px;

    flex-wrap:wrap;

}


.botao{

    display:inline-block;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color:var(--marrom-escuro);

    text-decoration:none;

    padding:12px 20px;

    border-radius:9px;

    font-weight:bold;

    font-family:Arial, Helvetica, sans-serif;

    transition:.25s;

    box-shadow:
        0 4px 10px rgba(58,31,18,.12);

}


.botao:hover{

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

    border-right:1px solid #9A6038;

}


th:last-child{

    border-right:none;

}


/* =========================================
   CÉLULAS
========================================= */

td{

    padding:12px;

    border-right:1px solid var(--linha);

    border-bottom:1px solid var(--linha);

    text-align:center;

    color:var(--texto);

    font-family:Arial, Helvetica, sans-serif;

}


td:last-child{

    border-right:none;

}


/* =========================================
   ÚLTIMA LINHA
========================================= */

tr:last-child td{

    border-bottom:none;

}


/* =========================================
   EFEITO NAS LINHAS
========================================= */

tr{

    transition:.2s;

}


tr:hover{

    background:#FFF8DF;

}


/* =========================================
   BOTÃO EDITAR
========================================= */

.editar{

    background:var(--amarelo);

    color:var(--marrom-escuro);

    padding:8px 14px;

    border-radius:7px;

    text-decoration:none;

    font-weight:bold;

    display:inline-block;

    transition:.25s;

}


.editar:hover{

    background:var(--amarelo-escuro);

    transform:translateY(-2px);

}


/* =========================================
   BOTÃO EXCLUIR
========================================= */

.excluir{

    background:var(--marrom);

    color:var(--branco);

    padding:8px 14px;

    border-radius:7px;

    text-decoration:none;

    font-weight:bold;

    display:inline-block;

    margin-left:5px;

    transition:.25s;

}


.excluir:hover{

    background:var(--marrom-escuro);

    transform:translateY(-2px);

}


/* =========================================
   RESPONSIVO
========================================= */

@media(max-width:800px){

    .container{

        width:94%;

        margin:25px auto;

    }

    h1{

        font-size:25px;

    }

    .botoes{

        flex-direction:column;

    }

    .botao{

        text-align:center;

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

    .editar,
    .excluir{

        display:block;

        margin:5px 0;

    }

}

</style>

</style>

</head>

<body>

<div class="container">

<h1>Usuários Cadastrados</h1>

<div class="botoes">

<a href="cadastro_usuario.php" class="botao">
Novo Usuário
</a>

<a href="painel_admin.php" class="botao">
Voltar ao Painel
</a>

</div>

<table>

<tr>

<th>ID</th>

<th>Nome</th>

<th>Usuário</th>

<th>Tipo</th>

<th>Ações</th>

</tr>

<?php while($usuario = $resultado->fetch_assoc()){ ?>

<tr>

<td><?= $usuario['id']; ?></td>

<td><?= htmlspecialchars($usuario['nome']); ?></td>

<td><?= htmlspecialchars($usuario['usuario']); ?></td>

<td><?= ucfirst($usuario['tipo']); ?></td>

<td>

<a class="editar"
href="editar_usuario.php?id=<?= $usuario['id']; ?>">
Editar
</a>

<a class="excluir"
href="excluir_usuario.php?id=<?= $usuario['id']; ?>"
onclick="return confirm('Deseja realmente excluir este usuário?')">
Excluir
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>