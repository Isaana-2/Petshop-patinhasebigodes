<?php

include("../includes/conexao.php");

$sql="SELECT animais.*,clientes.nome AS dono
FROM animais
INNER JOIN clientes
ON clientes.id=animais.cliente_id
ORDER BY animais.nome";

$resultado=$conexao->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Animais</title>

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
   BOTÃO NOVO ANIMAL
========================================= */

body > a{

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


body > a:hover{

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

    margin-top:25px;

    background:var(--branco);

    border-collapse:separate;

    border-spacing:0;

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

    color:var(--texto);

    font-family:Arial, Helvetica, sans-serif;

    border-right:1px solid var(--linha);

    border-bottom:1px solid var(--linha);

    text-align:center;

}


/* Remove a linha vertical da última coluna */

td:last-child{

    border-right:none;

}


/* Remove a linha inferior da última linha */

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
   LINKS
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

    margin-left:15px;

    background:var(--marrom);

    color:#fff;

    padding:12px 20px;

    border-radius:9px;

    text-decoration:none;

    font-weight:bold;

    transition:.25s;

    box-shadow:
        0 4px 10px rgba(58,31,18,.12);

}

.btn-voltar:hover{

    background:var(--marrom-medio);

    transform:translateY(-2px);

    box-shadow:
        0 6px 14px rgba(58,31,18,.18);

}

</style>
</head>

<body>

<h1>Animais Cadastrados</h1>

<a href="javascript:history.back()" class="btn-voltar">
    ← Voltar
</a>

<a href="cadastrar_animal.php" class="btn">
    Novo Animal
</a>

<br><br>



<table>

<tr>

<th>Nome</th>

<th>Espécie</th>

<th>Raça</th>

<th>Dono</th>

<th>Ações</th>

</tr>

<?php while($animal=$resultado->fetch_assoc()){ ?>

<tr>

<td><?= htmlspecialchars($animal['nome']) ?></td>

<td><?= htmlspecialchars($animal['especie']) ?></td>

<td><?= htmlspecialchars($animal['raca']) ?></td>

<td><?= htmlspecialchars($animal['dono']) ?></td>

<td>

<a href="editar_animal.php?id=<?= $animal['id'] ?>">Editar</a>

|

<a href="excluir_animal.php?id=<?= $animal['id'] ?>"
onclick="return confirm('Excluir animal?')">

Excluir

</a>

</td>

</tr>

<?php } ?>

</table>

</body>

</html>