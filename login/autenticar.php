<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include("../includes/conexao.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: login.php");
    exit();
}

// Recebe os dados
$usuario = trim($_POST['usuario']);
$senha = $_POST['senha'];

// Busca o usuário
$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conexao->prepare($sql);

if (!$stmt) {
    die("Erro na consulta: " . $conexao->error);
}

$stmt->bind_param("s", $usuario);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {

    $dados = $resultado->fetch_assoc();

    // Verifica a senha
    if (password_verify($senha, $dados['senha'])) {

        $_SESSION['id'] = $dados['id'];
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['tipo'] = $dados['tipo'];

        // Redireciona conforme o tipo
        switch ($dados['tipo']) {

            case "admin":
                header("Location: ../admin/painel_admin.php");
                exit();

            case "secretaria":
                header("Location: ../secretaria/painel_secretaria.php");
                exit();

            case "professor":
                header("Location: ../professor/painel_professor.php");
                exit();

            case "aluno":
                header("Location: ../aluno/painel_aluno.php");
                exit();

            default:
                header("Location: ../index.php");
                exit();
        }

    } else {
        echo "<script>
                alert('Senha incorreta!');
                window.location='login.php';
              </script>";
    }

} else {

    echo "<script>
            alert('Usuário não encontrado!');
            window.location='login.php';
          </script>";
}

$stmt->close();
$conexao->close();
?>