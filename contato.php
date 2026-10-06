<?php include("includes/header.php"); ?>

<main>

<section>

    <div class="container">

        <div class="contato">

            <!-- FORMULÁRIO -->

            <div class="formulario">

                <h2>Entre em Contato</h2>

                <p>
                    Ficou com alguma dúvida ou deseja agendar um atendimento?
                    Preencha o formulário abaixo e nossa equipe responderá
                    o mais rápido possível.
                </p>

                <br>

    <form action="https://formsubmit.co/isabela.fr09@gmail.com" method="POST">

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
                        name="assunto"
                        placeholder="Assunto"
                    >

                    <textarea
                        name="mensagem"
                        placeholder="Digite sua mensagem..."
                        rows="6"
                        required
                    ></textarea>

                    <button type="submit">

                        Enviar Mensagem

                    </button>

                </form>

            </div>


            
<!-- INFORMAÇÕES -->
<div class="informacoes">

    <img
        src="includes/img/contatos.png"
        alt="Contato"
    >

 

    <div class="info-item">
        <span>📍</span>
        <div>
            <strong>Endereço</strong><br>
            Rua dos Animais, 150<br>
            Centro - Sua Cidade
        </div>
    </div>

    <div class="info-item">
        <span>📞</span>
        <div>
            <strong>Telefone</strong><br>
            (38) 99999-9999
        </div>
    </div>

    <div class="info-item">
        <span>📧</span>
        <div>
            <strong>E-mail</strong><br>
            isabela.fr09@gmail.com.br
        </div>
    </div>

    <div class="info-item">
        <span>🕒</span>
        <div>
            <strong>Horário</strong><br>
            Segunda a Sexta: 08:00 às 18:00<br>
            Sábado: 08:00 às 13:00
        </div>
    </div>

</div>


<!-- MAPA -->

<section>

    <div class="container">

        

        <br>

    </div>

</section>

</main>

<?php include("includes/footer.php"); ?>