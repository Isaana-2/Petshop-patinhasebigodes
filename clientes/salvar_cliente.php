<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin' && $_SESSION['tipo'] != 'secretaria') {
    header("Location: ../login/login.php");
    exit();
}

$nome = trim($_POST['nome']);
$cpf = trim($_POST['cpf']);
$telefone = trim($_POST['telefone']);
$email = trim($_POST['email']);
$endereco = trim($_POST['endereco']);

$sql = "INSERT INTO clientes (nome, cpf, telefone, email, endereco)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);

if (!$stmt) {
    die("Erro: " . $conexao->error);
}

$stmt->bind_param("sssss", $nome, $cpf, $telefone, $email, $endereco);

if ($stmt->execute()) {

    echo "<script>
            alert('Cliente cadastrado com sucesso!');
            window.location='listar_clientes.php';
          </script>";

} else {

    echo "<script>
            alert('Erro ao cadastrar cliente!');
            window.history.back();
          </script>";

}

$stmt->close();
$conexao->close();

?>