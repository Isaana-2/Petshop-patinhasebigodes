<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin' && $_SESSION['tipo'] != 'secretaria') {
    header("Location: ../login/login.php");
    exit();
}

$id = intval($_GET['id']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];

    $sql = "UPDATE clientes
            SET nome=?, cpf=?, telefone=?, email=?, endereco=?
            WHERE id=?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssssi",$nome,$cpf,$telefone,$email,$endereco,$id);

    if($stmt->execute()){
        header("Location: listar_clientes.php");
        exit();
    }else{
        echo "Erro ao atualizar.";
    }

}

$sql="SELECT * FROM clientes WHERE id=?";
$stmt=$conexao->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();

$cliente=$stmt->get_result()->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<title>Editar Cliente</title>

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

input{
width:100%;
padding:12px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:8px;
}

button{
width:100%;
padding:12px;
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

<h2>Editar Cliente</h2>

<form method="POST">

<input type="text" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" required>

<input type="text" name="cpf" value="<?= htmlspecialchars($cliente['cpf']) ?>" required>

<input type="text" name="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>" required>

<input type="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" required>

<input type="text" name="endereco" value="<?= htmlspecialchars($cliente['endereco']) ?>" required>

<button>Salvar Alterações</button>

</form>

</div>

</body>
</html>