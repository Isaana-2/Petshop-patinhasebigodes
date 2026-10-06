<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != "admin") {
    header("Location: ../login/login.php");
    exit();
}

$categoria = $_POST['categoria'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$descricaoCompleta = $_POST['descricaoCompleta'];
$preco = $_POST['preco'];

$imagem = "";

/* Upload da imagem */

if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {

    $pasta = "../includes/img/";

    if (!is_dir($pasta)) {
        mkdir($pasta, 0777, true);
    }

    $extensao = strtolower(pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION));

    $novoNome = uniqid() . "." . $extensao;

    move_uploaded_file($_FILES["imagem"]["tmp_name"], $pasta . $novoNome);

    $imagem = "includes/img/" . $novoNome;
}

$sql = $conexao->prepare("
INSERT INTO produtos
(categoria,nome,descricao,descricaoCompleta,preco,imagem)
VALUES
(?,?,?,?,?,?)
");

$sql->bind_param(
    "ssssds",
    $categoria,
    $nome,
    $descricao,
    $descricaoCompleta,
    $preco,
    $imagem
);

if ($sql->execute()) {

    echo "<script>

    alert('Produto cadastrado com sucesso!');

    window.location='gerenciar_produtos.php';

    </script>";

} else {

    echo "Erro: " . $conexao->error;

}
?>