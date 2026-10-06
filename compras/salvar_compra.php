<?php

include("../includes/conexao.php");

$stmt = $conexao->prepare("
    INSERT INTO compras(cliente_id, animal_id, servico_id, valor)
    VALUES (?, ?, ?, ?)
");

$stmt->bind_param(
    "iiid",
    $_POST['cliente_id'],
    $_POST['animal_id'],
    $_POST['servico_id'],
    $_POST['valor']
);

if ($stmt->execute()) {

    $id = $conexao->insert_id;

    // Abre o recibo da compra cadastrada
    header("Location: recebido.php?id=" . $id);
    exit();

} else {

    echo "Erro ao salvar compra: " . $conexao->error;

}

?>