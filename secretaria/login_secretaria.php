<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<title>Login da Secretária</title>

<link rel="stylesheet" href="css/login.css">

</head>

<body>

<div class="login">

<h2>🐾 Área da Secretária</h2>

<form action="autenticar_secretaria.php" method="POST">

<input
type="text"
name="usuario"
placeholder="Usuário"
required>

<input
type="password"
name="senha"
placeholder="Senha"
required>

<button type="submit">

Entrar

</button>

</form>

</div>

</body>
</html>