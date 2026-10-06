<?php
include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin' && $_SESSION['tipo'] != 'secretaria') {
    header("Location: ../login/login.php");
    exit();
}

$clientes = $conexao->query("SELECT id,nome FROM clientes ORDER BY nome");
$animais = $conexao->query("SELECT id,nome FROM animais ORDER BY nome");
$servicos = $conexao->query("SELECT id,nome,preco FROM servicos ORDER BY nome");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Fechar Compra</title>

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

    width:600px;

    max-width:95%;

    margin:40px auto;

    background:var(--branco);

    padding:30px;

    border-radius:14px;

    border:2px solid var(--borda);

    box-shadow:
        0 10px 30px rgba(58,31,18,.15);

}


/* =========================================
   TÍTULO
========================================= */

h1,
h2{

    text-align:center;

    color:var(--marrom-escuro);

    margin-bottom:25px;

    position:relative;

}


h1::after,
h2::after{

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
   INPUTS E SELECT
========================================= */

select,
input{

    width:100%;

    padding:12px;

    margin-bottom:15px;

    border:1px solid #D8C9A8;

    border-radius:8px;

    background:#FFFDF7;

    color:var(--texto);

    font-size:15px;

    outline:none;

    transition:.25s;

}


select:focus,
input:focus{

    border-color:var(--amarelo);

    box-shadow:
        0 0 0 3px rgba(244,180,0,.15);

}


/* =========================================
   BOTÃO
========================================= */

button{

    width:100%;

    padding:14px;

    margin-top:5px;

    background:
        linear-gradient(
            90deg,
            var(--amarelo-escuro),
            var(--amarelo),
            var(--amarelo-claro)
        );

    color:var(--marrom-escuro);

    border:none;

    border-radius:9px;

    cursor:pointer;

    font-size:16px;

    font-weight:bold;

    transition:.25s;

    box-shadow:
        0 4px 10px rgba(58,31,18,.12);

}


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
        0 6px 14px rgba(58,31,18,.18);

}


/* =========================================
   RESPONSIVO
========================================= */

@media(max-width:700px){

    .container{

        width:94%;

        margin:25px auto;

        padding:22px;

    }

    h1,
    h2{

        font-size:25px;

    }

}

/* =========================================
   BOTÃO VOLTAR
========================================= */

.btn-voltar{

    display:block;

    width:100%;

    margin-top:15px;

    padding:14px;

    background:var(--marrom);

    color:#fff;

    text-align:center;

    text-decoration:none;

    border-radius:9px;

    font-size:16px;

    font-weight:bold;

    transition:.25s;

    box-shadow:
        0 4px 10px rgba(58,31,18,.12);

}

.btn-voltar:hover{

    background:var(--marrom-medio);

    transform:translateY(-2px);

    box-shadow:
        0 6px 14px rgba(58,31,18,.18);

}

</style>

</head>

<body>

<div class="container">

<h2>Fechar Compra</h2>

<form action="salvar_compra.php" method="POST">

<label>Cliente</label>

<select name="cliente_id" required>

<option value="">Selecione</option>

<?php while($c=$clientes->fetch_assoc()){ ?>

<option value="<?= $c['id'] ?>">
<?= htmlspecialchars($c['nome']) ?>
</option>

<?php } ?>

</select>

<label>Animal</label>

<select name="animal_id" required>

<option value="">Selecione</option>

<?php while($a=$animais->fetch_assoc()){ ?>

<option value="<?= $a['id'] ?>">
<?= htmlspecialchars($a['nome']) ?>
</option>

<?php } ?>

</select>

<label>Serviço</label>

<select name="servico_id" required>

<option value="">Selecione</option>

<?php while($s=$servicos->fetch_assoc()){ ?>

<option
value="<?= $s['id'] ?>"
data-preco="<?= $s['preco'] ?>">

<?= htmlspecialchars($s['nome']) ?> -
R$ <?= number_format($s['preco'],2,",",".") ?>

</option>

<?php } ?>

</select>

<label>Valor</label>

<input type="number"
step="0.01"
name="valor"
id="valor"
required>

<button>Finalizar Compra</button>
<a href="javascript:history.back()" class="btn-voltar">
    ← Voltar
</a>

</form>

</div>

<script>

const servico=document.querySelector("select[name=servico_id]");
const valor=document.getElementById("valor");

servico.addEventListener("change",function(){

valor.value=this.options[this.selectedIndex].dataset.preco;

});

</script>

</body>

</html>