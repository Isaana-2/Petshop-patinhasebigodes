<?php include("includes/header.php"); ?>
<main>
<section>

    <div class="container">

        <h1 style="
            text-align:center;
            font-size:50px;
            color:#744c10;
            margin-bottom:15px;
        ">
            Cadastro
        </h1>

        <p style="
            text-align:center;
            font-size:22px;
            color:#555;
            margin-bottom:40px;
        ">
            🐾 Seja bem-vindo ao <strong>Patinhas e Bigodes</strong>!<br>
            Preencha os dados abaixo para realizar seu cadastro.
        </p>

        <form action="salvar_cadastro.php" method="POST">

            <input
                type="text"
                name="nome"
                placeholder="Nome Completo"
                required
            >

            <input
                type="email"
                name="email"
                placeholder="E-mail"
                required
            >

            <input
                type="tel"
                name="telefone"
                placeholder="Telefone"
                required
            >

            <input
                type="text"
                name="cpf"
                placeholder="CPF"
                required
            >

            <input
                type="text"
                name="endereco"
                placeholder="Endereço"
                required
            >

            <input
                type="password"
                name="senha"
                placeholder="Senha"
                required
            >

            <input
                type="password"
                name="confirmar_senha"
                placeholder="Confirmar Senha"
                required
            >

            <button type="submit">
                Cadastrar
            </button>

        </form>

    </div>

</section>
</main>
<?php include("includes/footer.php"); ?>