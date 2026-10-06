<?php

include("../includes/conexao.php");

$id = intval($_GET['id']);

if($_SERVER["REQUEST_METHOD"]=="POST"){

$stmt=$conexao->prepare("UPDATE animais SET nome=?,especie=?,raca=?,sexo=?,idade=?,peso=?,cor=? WHERE id=?");

$stmt->bind_param(
"ssssidsi",
$_POST['nome'],
$_POST['especie'],
$_POST['raca'],
$_POST['sexo'],
$_POST['idade'],
$_POST['peso'],
$_POST['cor'],
$id
);

$stmt->execute();

header("Location:listar_animais.php");
exit();

}

$stmt=$conexao->prepare("SELECT * FROM animais WHERE id=?");
$stmt->bind_param("i",$id);
$stmt->execute();

$animal=$stmt->get_result()->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Animal</title>
</head>
<body>

<form method="POST">

<input type="text" name="nome" value="<?= htmlspecialchars($animal['nome']) ?>" required>

<input type="text" name="especie" value="<?= htmlspecialchars($animal['especie']) ?>" required>

<input type="text" name="raca" value="<?= htmlspecialchars($animal['raca']) ?>">

<input type="text" name="sexo" value="<?= htmlspecialchars($animal['sexo']) ?>">

<input type="number" name="idade" value="<?= $animal['idade'] ?>">

<input type="number" step="0.01" name="peso" value="<?= $animal['peso'] ?>">

<input type="text" name="cor" value="<?= htmlspecialchars($animal['cor']) ?>">

<button type="submit">Salvar Alterações</button>

</form>

</body>
</html>