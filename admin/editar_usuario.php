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

$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows == 0) {
    die("Usuário não encontrado.");
}

$usuario = $resultado->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST['nome']);
    $login = trim($_POST['usuario']);
    $tipo = $_POST['tipo'];
    $senha = $_POST['senha'];

    if (!empty($senha)) {

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "UPDATE usuarios
                SET nome=?, usuario=?, senha=?, tipo=?
                WHERE id=?";

        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ssssi",
            $nome,
            $login,
            $senhaHash,
            $tipo,
            $id
        );

    } else {

        $sql = "UPDATE usuarios
                SET nome=?, usuario=?, tipo=?
                WHERE id=?";

        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("sssi",
            $nome,
            $login,
            $tipo,
            $id
        );

    }

    if ($stmt->execute()) {

        echo "<script>
                alert('Usuário atualizado com sucesso!');
                window.location='lista_usuarios.php';
              </script>";

        exit();
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Editar Usuário</title>

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

    width:500px;

    max-width:92%;

    margin:50px auto;

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

    margin-bottom:30px;

    color:var(--marrom-escuro);

    font-size:29px;

    position:relative;

}


h1::after{

    content:"";

    display:block;

    width:70px;

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
   INPUTS E SELECT
========================================= */

input,
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
select:focus{

    border-color:var(--amarelo);

    box-shadow:
        0 0 0 3px rgba(244,180,0,.20);

    background:var(--branco);

}


/* =========================================
   PLACEHOLDER
========================================= */

input::placeholder{

    color:#9A8068;

}


/* =========================================
   BOTÃO SALVAR
========================================= */

button{

    width:100%;

    margin-top:28px;

    padding:15px;

    border:none;

    border-radius:10px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color:var(--marrom-escuro);

    cursor:pointer;

    font-size:17px;

    font-weight:bold;

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
   BOTÃO VOLTAR
========================================= */

a{

    display:block;

    margin-top:20px;

    padding:12px;

    text-align:center;

    text-decoration:none;

    color:var(--branco);

    background:var(--marrom);

    border:2px solid var(--marrom);

    border-radius:9px;

    font-weight:bold;

    transition:.25s;

}


/* =========================================
   HOVER VOLTAR
========================================= */

a:hover{

    background:var(--marrom-medio);

    border-color:var(--marrom-medio);

    transform:translateY(-2px);

}


/* =========================================
   RESPONSIVO
========================================= */

@media(max-width:600px){

    .container{

        margin:30px auto;

        padding:25px;

    }

    h1{

        font-size:25px;

    }

}

</style>

</head>

<body>

<div class="container">

<h1>Editar Usuário</h1>

<form method="POST">

<label>Nome</label>

<input
type="text"
name="nome"
value="<?= htmlspecialchars($usuario['nome']); ?>"
required>

<label>Usuário</label>

<input
type="text"
name="usuario"
value="<?= htmlspecialchars($usuario['usuario']); ?>"
required>

<label>Nova Senha</label>

<input
type="password"
name="senha"
placeholder="Deixe em branco para manter a senha">

<label>Tipo</label>

<select name="tipo">

<option value="admin"
<?= ($usuario['tipo']=="admin") ? "selected" : ""; ?>>
Administrador
</option>

<option value="secretaria"
<?= ($usuario['tipo']=="secretaria") ? "selected" : ""; ?>>
Secretária
</option>

</select>

<button type="submit">

Salvar Alterações

</button>

</form>

<a href="lista_usuarios.php">

← Voltar

</a>

</div>

</body>

</html>