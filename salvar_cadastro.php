<?php

include("includes/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];
$confirmar = $_POST['confirmar_senha'];

if($senha != $confirmar){
    die("As senhas não conferem.");
}

// Criptografa a senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Verifica se email ou CPF já existem
$verifica = $conexao->prepare("SELECT id FROM usuarios WHERE email = ? OR cpf = ?");
$verifica->bind_param("ss", $email, $cpf);
$verifica->execute();
$resultado = $verifica->get_result();

if($resultado->num_rows > 0){
    die("E-mail ou CPF já cadastrados.");
}

$sql = $conexao->prepare("
INSERT INTO usuarios
(nome,email,telefone,cpf,endereco,senha)
VALUES
(?,?,?,?,?,?)
");

$sql->bind_param(
    "ssssss",
    $nome,
    $email,
    $telefone,
    $cpf,
    $endereco,
    $senhaHash
);

if($sql->execute()){

    echo "
    <script>
        alert('Cadastro realizado com sucesso!');
        window.location='login.php';
    </script>
    ";

}else{

    echo "Erro ao cadastrar.";

}

?>