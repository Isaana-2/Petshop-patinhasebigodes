<?php
include("../includes/conexao.php");
include("../login/verificar.php");

if ($_SESSION['tipo'] != 'admin' && $_SESSION['tipo'] != 'secretaria') {
    header("Location: ../login/login.php");
    exit();
}

$clientes = $conexao->query("SELECT id,nome FROM clientes ORDER BY nome");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastrar Animal</title>

<style>

/* BOTÃO VOLTAR */

.btn-voltar{

    display:block;

    width:100%;

    padding:15px;

    margin:0 0 15px 0;

    background:var(--marrom);

    color:var(--branco);

    text-align:center;

    text-decoration:none;

    border:none;

    border-radius:10px;

    font-size:17px;

    font-weight:bold;

    transition:.25s;

}

.btn-voltar:hover{

    background:var(--marrom-medio);

    transform:translateY(-2px);

    box-shadow:0 7px 15px rgba(58,31,18,.20);

}
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
    --creme-claro:#FFFDF7;

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

    display:flex;

    justify-content:center;

    align-items:center;

    padding:30px;

    color:var(--texto);

}


/* =========================================
   CONTAINER
========================================= */

.container{

    width:600px;

    max-width:95%;

    background:var(--branco);

    padding:35px;

    border-radius:18px;

    border:2px solid var(--borda);

    box-shadow:
        0 10px 30px rgba(58,31,18,.15);

}


/* =========================================
   TÍTULO
========================================= */

h2{

    text-align:center;

    color:var(--marrom-escuro);

    font-size:30px;

    margin-bottom:28px;

    position:relative;

}


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
   CAMPOS
========================================= */

input,
select{

    width:100%;

    padding:13px;

    margin-bottom:16px;

    border:2px solid #E5D1A3;

    border-radius:9px;

    background:var(--creme-claro);

    color:var(--texto);

    font-size:15px;

    outline:none;

    transition:.25s;

}


/* =========================================
   PLACEHOLDER
========================================= */

input::placeholder{

    color:#8A6A52;

}


/* =========================================
   FOCO
========================================= */

input:focus,
select:focus{

    border-color:var(--amarelo);

    background:var(--branco);

    box-shadow:
        0 0 0 3px rgba(244,180,0,.20);

}


/* =========================================
   SELECT
========================================= */

select{

    cursor:pointer;

}


/* =========================================
   BOTÃO
========================================= */

button{

    width:100%;

    padding:15px;

    margin-top:8px;

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

    cursor:pointer;

    font-size:17px;

    font-weight:bold;

    transition:.25s;

}


/* =========================================
   HOVER
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

@media(max-width:650px){

    body{

        padding:20px;

    }

    .container{

        padding:25px;

    }

    h2{

        font-size:25px;

    }

}

</style>
</head>

<body>

<div class="container">

<h2>Cadastrar Animal</h2>



<form action="salvar_animal.php" method="POST">

<input type="text" name="nome" placeholder="Nome do animal" required>

<input type="text" name="especie" placeholder="Espécie" required>

<input type="text" name="raca" placeholder="Raça">

<select name="sexo" required>
<option value="">Sexo</option>
<option>Macho</option>
<option>Fêmea</option>
</select>

<input type="number" name="idade" placeholder="Idade">

<input type="number" step="0.01" name="peso" placeholder="Peso">

<input type="text" name="cor" placeholder="Cor">

<select name="cliente_id" required>

<option value="">Selecione o dono</option>

<?php while($c=$clientes->fetch_assoc()){ ?>

<option value="<?= $c['id']; ?>">
<?= htmlspecialchars($c['nome']); ?>
</option>

<?php } ?>

</select>

<button>Cadastrar Animal</button>

  <a href="javascript:history.back()" class="btn-voltar">
        <i class="fa-solid fa-arrow-left"></i> Voltar
    </a>


</form>

</div>

</body>
</html>