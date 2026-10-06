<?php

include("../includes/conexao.php");

$id = intval($_GET['id']);

if($_SERVER["REQUEST_METHOD"]=="POST"){

$stmt=$conexao->prepare(
"UPDATE servicos
SET nome=?, descricao=?, preco=?
WHERE id=?"
);

$stmt->bind_param(
"ssdi",
$_POST['nome'],
$_POST['descricao'],
$_POST['preco'],
$id
);

$stmt->execute();

header("Location:listar_servicos.php");
exit();

}

$stmt=$conexao->prepare(
"SELECT * FROM servicos WHERE id=?"
);

$stmt->bind_param("i",$id);
$stmt->execute();

$servico=$stmt->get_result()->fetch_assoc();

?>

<form method="POST">

<input type="text" name="nome"
value="<?= htmlspecialchars($servico['nome']) ?>">

<textarea name="descricao"><?= htmlspecialchars($servico['descricao']) ?></textarea>

<input type="number" step="0.01"
name="preco"
value="<?= $servico['preco'] ?>">

<button>Salvar</button>

</form>