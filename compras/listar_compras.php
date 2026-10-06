<?php

include("../includes/conexao.php");

$sql="

SELECT

compras.id,

clientes.nome cliente,

animais.nome animal,

servicos.nome servico,

compras.valor,

compras.data_compra

FROM compras

INNER JOIN clientes
ON clientes.id=compras.cliente_id

INNER JOIN animais
ON animais.id=compras.animal_id

INNER JOIN servicos
ON servicos.id=compras.servico_id

ORDER BY compras.data_compra DESC

";

$resultado=$conexao->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Compras</title>

<style>

body{
    font-family:Arial, Helvetica, sans-serif;

    background:
        linear-gradient(
            135deg,
            #FFF9E8,
            #FFE8A3
        );

    padding:30px;

    color:#3A2418;
}


table{
    width:100%;

    background:#FFFFFF;

    border-collapse:collapse;

    border:2px solid #E8C76A;

    border-radius:14px;

    overflow:hidden;

    box-shadow:
        0 10px 30px rgba(58,31,18,.15);
}


/* CABEÇALHO */

th{

    background:#7A4528;

    color:#FFF9E8;

    padding:15px;

    font-family:Arial, Helvetica, sans-serif;

    font-weight:bold;

    font-size:15px;

    border-right:1px solid #9A6038;

}


/* CÉLULAS */

td{

    padding:12px;

    text-align:center;

    color:#3A2418;

    font-family:Arial, Helvetica, sans-serif;

    border-right:1px solid #E8D8B8;

    border-bottom:1px solid #E8D8B8;

}


/* Remove a linha da última coluna */

th:last-child,
td:last-child{

    border-right:none;

}


/* EFEITO AO PASSAR O MOUSE */

tr{

    transition:.2s;

}


tr:hover{

    background:#FFF8DF;

}

/* =========================================
   BOTÃO VOLTAR
========================================= */

.btn-voltar{

    display:inline-block;

    background:#5A2D18;

    color:#fff;

    padding:12px 20px;

    border-radius:9px;

    text-decoration:none;

    font-weight:bold;

    transition:.25s;

    box-shadow:
        0 4px 10px rgba(58,31,18,.12);

    margin-bottom:20px;

}

.btn-voltar:hover{

    background:#7A4528;

    transform:translateY(-2px);

    box-shadow:
        0 6px 14px rgba(58,31,18,.18);

}


/* TÍTULO */

h1{

    text-align:center;

    color:#3A1F12;

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

    background:linear-gradient(
        90deg,
        #D99500,
        #FFD966
    );

}
</style>

</head>

<body>

<a href="javascript:history.back()" class="btn-voltar">
    ← Voltar
</a>


<h1>Compras Realizadas</h1>

<table>

<tr>

<th>ID</th>

<th>Cliente</th>

<th>Animal</th>

<th>Serviço</th>

<th>Valor</th>

<th>Data</th>

</tr>

<?php while($c=$resultado->fetch_assoc()){ ?>

<tr>

<td><?= $c['id'] ?></td>

<td><?= htmlspecialchars($c['cliente']) ?></td>

<td><?= htmlspecialchars($c['animal']) ?></td>

<td><?= htmlspecialchars($c['servico']) ?></td>

<td>R$ <?= number_format($c['valor'],2,",",".") ?></td>

<td><?= $c['data_compra'] ?></td>

</tr>

<?php } ?>

</table>

</body>

</html>