<?php

header('Content-Type: application/json; charset=utf-8');

include("includes/conexao.php");

$busca = isset($_GET['q'])
    ? trim($_GET['q'])
    : '';

if ($busca === '') {

    echo json_encode([]);

    exit;

}

$termo = "%" . $busca . "%";


$sql = $conexao->prepare("

    SELECT
        id,
        categoria,
        nome,
        descricao,
        preco,
        imagem

    FROM produtos

    WHERE
        nome LIKE ?
        OR categoria LIKE ?
        OR descricao LIKE ?

    ORDER BY nome ASC

    LIMIT 10

");


$sql->bind_param(
    "sss",
    $termo,
    $termo,
    $termo
);


$sql->execute();


$resultado = $sql->get_result();


$produtos = [];


while ($produto = $resultado->fetch_assoc()) {

    $produtos[] = [

        "id" => $produto["id"],

        "categoria" => $produto["categoria"],

        "nome" => $produto["nome"],

        "descricao" => $produto["descricao"],

        "preco" => (float) $produto["preco"],

        "imagem" => $produto["imagem"]

    ];

}


echo json_encode(
    $produtos,
    JSON_UNESCAPED_UNICODE
);


$sql->close();

$conexao->close();

?>