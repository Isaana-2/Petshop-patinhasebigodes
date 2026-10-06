<?php

include("../includes/conexao.php");
include("../login/verificar.php");

$id = intval($_GET['id']);

$sql = "

SELECT

compras.id,

compras.valor,

compras.data_compra,

clientes.nome AS cliente,

clientes.telefone,

animais.nome AS animal,

animais.especie,

servicos.nome AS servico

FROM compras

INNER JOIN clientes
ON clientes.id = compras.cliente_id

INNER JOIN animais
ON animais.id = compras.animal_id

INNER JOIN servicos
ON servicos.id = compras.servico_id

WHERE compras.id = ?

";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();

$dados = $stmt->get_result()->fetch_assoc();

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Recibo</title>

<style>

body{

font-family:Arial;

background:#f2f2f2;

}

.recibo{

width:700px;

margin:40px auto;

background:white;

padding:40px;

border-radius:10px;

box-shadow:0 0 15px rgba(0,0,0,.2);

}

h1{

text-align:center;

color:#0d6efd;

margin-bottom:30px;

}

table{

width:100%;

border-collapse:collapse;

}

td{

padding:12px;

border-bottom:1px solid #ddd;

}

.total{

font-size:25px;

font-weight:bold;

color:green;

text-align:right;

margin-top:30px;

}

button{

padding:12px 25px;

background:#0d6efd;

color:white;

border:none;

border-radius:8px;

cursor:pointer;

margin-top:30px;

}

</style>

</head>

<body>

<div class="recibo">

<h1>PET SHOP FINAL BOSS</h1>

<h3>Comprovante de Atendimento</h3>

<table>

<tr>

<td><strong>Recibo Nº</strong></td>

<td><?= $dados['id'] ?></td>

</tr>

<tr>

<td><strong>Cliente</strong></td>

<td><?= htmlspecialchars($dados['cliente']) ?></td>

</tr>

<tr>

<td><strong>Telefone</strong></td>

<td><?= htmlspecialchars($dados['telefone']) ?></td>

</tr>

<tr>

<td><strong>Animal</strong></td>

<td><?= htmlspecialchars($dados['animal']) ?></td>

</tr>

<tr>

<td><strong>Espécie</strong></td>

<td><?= htmlspecialchars($dados['especie']) ?></td>

</tr>

<tr>

<td><strong>Serviço</strong></td>

<td><?= htmlspecialchars($dados['servico']) ?></td>

</tr>

<tr>

<td><strong>Data</strong></td>

<td><?= date("d/m/Y H:i",strtotime($dados['data_compra'])) ?></td>

</tr>

</table>

<div class="total">

TOTAL: R$ <?= number_format($dados['valor'],2,",",".") ?>

</div>

<br>

<button onclick="window.print()">

🖨️ Imprimir Recibo

</button>

<button onclick="window.location='listar_compras.php'">

Voltar

</button>

</div>

</body>

</html>