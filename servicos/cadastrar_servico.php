<?php
include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin' && $_SESSION['tipo'] != 'secretaria') {
    header("Location: ../login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">

<title>Cadastrar Serviço</title>

<style>

body{
    font-family:Arial;
    background:#eef3f8;
}

.container{
    width:600px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 0 15px rgba(0,0,0,.15);
}

input,textarea{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:8px;
}

button{
    width:100%;
    padding:14px;
    background:#0d6efd;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

</style>

</head>

<body>

<div class="container">

<h2>Cadastrar Serviço</h2>

<form action="salvar_servico.php" method="POST">

<input type="text" name="nome" placeholder="Nome do serviço" required>

<textarea name="descricao" placeholder="Descrição"></textarea>

<input type="number" step="0.01" name="preco" placeholder="Preço" required>

<button>Cadastrar Serviço</button>

</form>

</div>

</body>
</html>