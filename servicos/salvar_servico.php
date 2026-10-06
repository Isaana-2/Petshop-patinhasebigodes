<?php

include("../includes/conexao.php");

$stmt = $conexao->prepare(
"INSERT INTO servicos(nome,descricao,preco)
VALUES(?,?,?)"
);

$stmt->bind_param(
"ssd",
$_POST['nome'],
$_POST['descricao'],
$_POST['preco']
);

$stmt->execute();

header("Location:listar_servicos.php");
exit();