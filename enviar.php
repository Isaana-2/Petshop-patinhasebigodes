<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefone = htmlspecialchars($_POST["telefone"]);
    $assunto = htmlspecialchars($_POST["assunto"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

} else {

    header("Location: contato.php");
    exit();

}


?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mensagem Enviada</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<section>

    <div class="container" style="text-align:center; padding:80px 0;">

        <h2>✅ Mensagem enviada com sucesso!</h2>

        <br>

        <p><strong>Nome:</strong> <?php echo $nome; ?></p>

        <p><strong>E-mail:</strong> <?php echo $email; ?></p>

        <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>

        <p><strong>Assunto:</strong> <?php echo $assunto; ?></p>

        <br>

        <p>

            Obrigado por entrar em contato com o
            <strong>Patinhas e Bigodes</strong>.

        </p>

        <br>

        <p>

            Nossa equipe responderá o mais rápido possível.

        </p>

        <br><br>

        <a href="index.php">

            <button>Voltar para o Início</button>

        </a>

    </div>

</section>

</body>

</html>