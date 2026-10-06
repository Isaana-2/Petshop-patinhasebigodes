<?php

session_start();

include("../includes/conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM secretaria WHERE usuario=?";

$stmt = $conexao->prepare($sql);

$stmt->bind_param("s",$usuario);

$stmt->execute();

$resultado = $stmt->get_result();

if($resultado->num_rows==1){

    $dados = $resultado->fetch_assoc();

    if(password_verify($senha,$dados['senha'])){

        $_SESSION['secretaria']=true;
        $_SESSION['id_secretaria']=$dados['id'];
        $_SESSION['nome_secretaria']=$dados['nome'];

        header("Location:painel_secretaria.php");
        exit;

    }

}

echo "<script>

alert('Usuário ou senha inválidos');

window.location='login_secretaria.php';

</script>";