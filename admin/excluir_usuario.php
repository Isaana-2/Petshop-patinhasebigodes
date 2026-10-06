<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin') {
    header("Location: ../login/login.php");
    exit();
}

if (!isset($_GET['id'])) {
    header("Location: lista_usuarios.php");
    exit();
}

$id = intval($_GET['id']);

// Impede que o administrador exclua a si mesmo
if ($id == $_SESSION['id']) {
    echo "<script>
            alert('Você não pode excluir o usuário que está logado.');
            window.location='lista_usuarios.php';
          </script>";
    exit();
}

// Verifica se o usuário existe
$sql = "SELECT id FROM usuarios WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows == 0) {

    echo "<script>
            alert('Usuário não encontrado.');
            window.location='lista_usuarios.php';
          </script>";

    exit();
}

// Exclui o usuário
$sql = "DELETE FROM usuarios WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {

    echo "<script>
            alert('Usuário excluído com sucesso!');
            window.location='lista_usuarios.php';
          </script>";

} else {

    echo "<script>
            alert('Erro ao excluir usuário.');
            window.location='lista_usuarios.php';
          </script>";

}

$stmt->close();
$conexao->close();

?>