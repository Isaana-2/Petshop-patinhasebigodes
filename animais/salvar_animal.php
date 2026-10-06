<?php

include("../includes/conexao.php");

$nome=$_POST['nome'];
$especie=$_POST['especie'];
$raca=$_POST['raca'];
$sexo=$_POST['sexo'];
$idade=$_POST['idade'];
$peso=$_POST['peso'];
$cor=$_POST['cor'];
$cliente=$_POST['cliente_id'];

$stmt=$conexao->prepare("INSERT INTO animais(nome,especie,raca,sexo,idade,peso,cor,cliente_id)
VALUES(?,?,?,?,?,?,?,?)");

$stmt->bind_param(
"ssssidsi",
$nome,
$especie,
$raca,
$sexo,
$idade,
$peso,
$cor,
$cliente
);

$stmt->execute();

header("Location:listar_animais.php");