<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin') {
    header("Location: ../login/login.php");
    exit();
}

$nome = trim($_POST['nome']);
$usuario = trim($_POST['usuario']);
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

// Verifica se o usuário já existe
$sql = "SELECT id FROM usuarios WHERE usuario = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    echo "<script>
            alert('Este usuário já está cadastrado!');
            window.location='cadastro_usuario.php';
          </script>";
    exit();
}

// Criptografa a senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Salva no banco
$sql = "INSERT INTO usuarios (nome, usuario, senha, tipo)
        VALUES (?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("ssss", $nome, $usuario, $senhaHash, $tipo);

if ($stmt->execute()) {

    echo "<script>
            alert('Usuário cadastrado com sucesso!');
            window.location='lista_usuarios.php';
          </script>";

} else {

    echo "<script>
            alert('Erro ao cadastrar usuário.');
            window.location='cadastro_usuario.php';
          </script>";

}

$stmt->close();
$conexao->close();

?>