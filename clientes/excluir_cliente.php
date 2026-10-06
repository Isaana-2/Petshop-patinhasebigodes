<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin' && $_SESSION['tipo'] != 'secretaria') {
    header("Location: ../login/login.php");
    exit();
}

$id = intval($_GET['id']);

$stmt = $conexao->prepare("DELETE FROM clientes WHERE id=?");
$stmt->bind_param("i",$id);

if($stmt->execute()){

    header("Location: listar_clientes.php");
    exit();

}else{

    echo "Erro ao excluir.";

}