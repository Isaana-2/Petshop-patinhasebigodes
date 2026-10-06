<?php

include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != "admin") {
    header("Location: ../login/login.php");
    exit();
}

if (!isset($_GET['id'])) {
    header("Location: lista_produtos.php");
    exit();
}

$id = intval($_GET['id']);

$sql = $conexao->prepare("SELECT * FROM produtos WHERE id=?");
$sql->bind_param("i", $id);
$sql->execute();

$resultado = $sql->get_result();

if ($resultado->num_rows == 0) {
    die("Produto não encontrado.");
}

$produto = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Editar Produto</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}


/* =========================================
   CORES
========================================= */

:root{

    --marrom-escuro:#3A1F12;
    --marrom:#5A2D18;
    --marrom-medio:#7A4528;
    --marrom-claro:#9A6038;

    --amarelo-escuro:#D99500;
    --amarelo:#F4B400;
    --amarelo-claro:#FFD966;

    --creme:#FFF9E8;
    --creme-escuro:#FFF0C2;

    --branco:#FFFFFF;

    --borda:#E8C76A;

    --texto:#3A2418;

}


/* =========================================
   BODY
========================================= */

body{

    min-height:100vh;

    background:
        linear-gradient(
            135deg,
            #FFF9E8,
            #FFE8A3
        );

    color:var(--texto);

}


/* =========================================
   CONTAINER
========================================= */

.container{

    width:700px;

    max-width:92%;

    margin:40px auto;

    background:var(--branco);

    padding:35px;

    border-radius:20px;

    border:2px solid var(--borda);

    box-shadow:
        0 10px 30px rgba(58,31,18,.15);

}


/* =========================================
   TÍTULO
========================================= */

h1{

    text-align:center;

    color:var(--marrom-escuro);

    font-size:30px;

    margin-bottom:30px;

    position:relative;

}


h1::after{

    content:"";

    display:block;

    width:75px;

    height:5px;

    margin:10px auto 0;

    border-radius:10px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo-claro)
        );

}


/* =========================================
   LABEL
========================================= */

label{

    display:block;

    margin-top:18px;

    margin-bottom:6px;

    font-weight:bold;

    color:var(--marrom);

}


/* =========================================
   CAMPOS
========================================= */

input,
textarea,
select{

    width:100%;

    padding:13px;

    margin-top:3px;

    border:2px solid #E5D1A3;

    border-radius:9px;

    background:#FFFDF7;

    color:var(--texto);

    font-size:15px;

    outline:none;

    transition:.25s;

}


/* =========================================
   FOCO
========================================= */

input:focus,
textarea:focus,
select:focus{

    border-color:var(--amarelo);

    box-shadow:
        0 0 0 3px rgba(244,180,0,.20);

    background:var(--branco);

}


/* =========================================
   TEXTAREA
========================================= */

textarea{

    height:120px;

    resize:vertical;

}


/* =========================================
   IMAGEM ATUAL
========================================= */

img{

    width:170px;

    height:170px;

    object-fit:cover;

    margin-top:15px;

    border-radius:12px;

    border:3px solid var(--amarelo);

    padding:4px;

    background:var(--creme);

    box-shadow:
        0 5px 15px rgba(58,31,18,.15);

}


/* =========================================
   CAMPO DE ARQUIVO
========================================= */

input[type="file"]{

    padding:10px;

    background:var(--creme);

    border-color:var(--borda);

}


/* Botão interno do campo de imagem */

input[type="file"]::file-selector-button{

    background:var(--marrom);

    color:white;

    border:none;

    padding:9px 14px;

    margin-right:10px;

    border-radius:7px;

    cursor:pointer;

    font-weight:bold;

    transition:.2s;

}


input[type="file"]::file-selector-button:hover{

    background:var(--marrom-medio);

}


/* =========================================
   BOTÃO SALVAR
========================================= */

button{

    margin-top:28px;

    width:100%;

    padding:15px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color:var(--marrom-escuro);

    border:none;

    border-radius:10px;

    font-size:17px;

    font-weight:bold;

    cursor:pointer;

    transition:.25s;

}


/* =========================================
   HOVER BOTÃO
========================================= */

button:hover{

    background:
        linear-gradient(
            90deg,
            #C98500,
            #E6A600,
            #F4C542
        );

    transform:translateY(-2px);

    box-shadow:
        0 7px 15px rgba(58,31,18,.20);

}


/* =========================================
   RESPONSIVO
========================================= */

@media(max-width:700px){

    .container{

        margin:25px auto;

        padding:25px;

    }

    h1{

        font-size:25px;

    }

    img{

        width:140px;

        height:140px;

    }

}

</style>

</head>

<body>

<div class="container">

<h1>Editar Produto</h1>

<form action="atualizar_produto.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?= $produto['id']; ?>">

<label>Categoria</label>

<select name="categoria">

<?php

$categorias = [

"Rações",
"Sachês",
"Petiscos",
"Areia",
"Higiene",
"Brinquedos",
"Acessórios",
"Coleira"

];

foreach($categorias as $cat){

$selected = ($produto['categoria']==$cat) ? "selected" : "";

echo "<option $selected>$cat</option>";

}

?>

</select>

<label>Nome</label>

<input
type="text"
name="nome"
value="<?= htmlspecialchars($produto['nome']); ?>"
required>

<label>Descrição</label>

<textarea
name="descricao"
required><?= htmlspecialchars($produto['descricao']); ?></textarea>

<label>Descrição Completa</label>

<textarea
name="descricaoCompleta"
required><?= htmlspecialchars($produto['descricaoCompleta']); ?></textarea>

<label>Preço</label>

<input
type="number"
step="0.01"
name="preco"
value="<?= $produto['preco']; ?>"
required>

<label>Imagem Atual</label>

<br>

<img src="../<?= $produto['imagem']; ?>">

<label>Nova Imagem (opcional)</label>

<input
type="file"
name="imagem">

<button>

Salvar Alterações

</button>

</form>

</div>

</body>

</html>