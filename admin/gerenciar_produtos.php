<?php
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin') {
    header("Location: ../login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Gerenciar Produtos</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
background:#eef4ff;
}

.container{
width:90%;
max-width:900px;
margin:40px auto;
}

h1{
text-align:center;
color:#0d6efd;
margin-bottom:30px;
}

.card{

background:white;
padding:25px;
border-radius:10px;
box-shadow:0 3px 10px rgba(0,0,0,.2);

}

a{

display:block;
padding:15px;
margin:15px 0;
background:#0d6efd;
color:white;
text-decoration:none;
text-align:center;
border-radius:8px;
font-size:18px;

}

a:hover{

background:#0b5ed7;

}

</style>

</head>

<body>

<div class="container">

<h1>Gerenciar Produtos</h1>

<div class="card">

<a href="cadastro_produto.php" class="btn">
    Cadastrar Produto
</a>

<a href="../produtos/lista_produtos.php">
Lista de Produtos
</a>

<a href="painel_admin.php">
Voltar ao Painel
</a>

</div>

</div>

</body>
</html>