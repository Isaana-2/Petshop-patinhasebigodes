<?php

include("../includes/conexao.php");

$id = intval($_GET['id']);

$stmt = $conexao->prepare(
"DELETE FROM servicos WHERE id=?"
);

$stmt->bind_param("i",$id);

$stmt->execute();

header("Location:listar_servicos.php");
exit();