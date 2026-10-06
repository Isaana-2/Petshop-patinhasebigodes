<?php

include("../includes/conexao.php");

$id = intval($_GET['id']);

$stmt = $conexao->prepare("DELETE FROM animais WHERE id=?");
$stmt->bind_param("i",$id);
$stmt->execute();

header("Location:listar_animais.php");
exit();