<?php include("../includes/header.php"); ?>

<style>

body{
    background:#f8f9fa;
    font-family:Arial, Helvetica, sans-serif;
}

.banner-servico{

    position:relative;
    width:100%;
    height:600px;

    background:url("COLE_A_URL_DO_BANNER") center center;
    background-size:cover;

    display:flex;
    justify-content:center;
    align-items:center;

}

.overlay{

    position:absolute;
    inset:0;
    background:rgba(0,0,0,.45);

}

.texto-banner{

    position:relative;
    color:white;
    text-align:center;
    z-index:2;

}

.texto-banner h1{

    font-size:60px;
    margin-bottom:20px;

}

.texto-banner p{

    font-size:24px;

}

body{

    background:#f8f9fa;

    font-family:Arial, Helvetica, sans-serif;

}

.pagina-servico{

    padding:60px 0;

}

.titulo-servico{

    text-align:center;

    margin-bottom:50px;

}

.titulo-servico h1{

    font-size:48px;

    color:#744c10;

}

.titulo-servico p{

    color:#666;

    font-size:20px;

}

/* GALERIA */

.galeria{

    width:90%;

    max-width:1100px;

    margin:auto;

}

.imagem-principal img{

    width:100%;

    height:550px;

    object-fit:cover;

    border-radius:20px;

    box-shadow:0 10px 30px rgba(0,0,0,.15);

}

.miniaturas{

    display:flex;

    justify-content:center;

    gap:20px;

    margin-top:20px;

}

.miniaturas img{

    width:180px;

    height:120px;

    object-fit:cover;

    border-radius:15px;

    cursor:pointer;

    transition:.3s;

    border:4px solid transparent;

}

.miniaturas img:hover{

    transform:scale(1.08);

    border-color:#ffd738;

}

/* DESCRIÇÃO */

.descricao-servico{

    width:90%;

    max-width:1000px;

    margin:70px auto;

}

.descricao-servico h2{

    color:#744c10;

    margin-bottom:20px;

}

.descricao-servico p{

    line-height:1.8;

    color:#555;

    font-size:18px;

}

/* BENEFÍCIOS */

.beneficios{

    width:90%;

    max-width:1100px;

    margin:auto;

}

.beneficios h2{

    text-align:center;

    color:#744c10;

    margin-bottom:40px;

}

.beneficios-grid{

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));

    gap:25px;

}

.beneficio{

    background:#fff;

    padding:35px;

    border-radius:20px;

    text-align:center;

    box-shadow:0 20px 40px rgba(0,0,0,.18);

    transition:.35s;

}

.beneficio:hover{

    transform:translateY(-12px);

}

.beneficio i{

    font-size:45px;

    color:#f7b500;

    margin-bottom:20px;

}

.beneficio h3{

    color:#744c10;

    margin-bottom:15px;

}

.beneficio p{

    color:#666;

    line-height:1.6;

}

/* FAQ */

.faq{

    width:90%;

    max-width:900px;

    margin:80px auto;

}

.faq h2{

    text-align:center;

    margin-bottom:30px;

    color:#744c10;

}

.faq-item{

    margin-bottom:15px;

}

.faq-btn{

    width:100%;

    padding:20px;

    background:#fff;

    border:none;

    cursor:pointer;

    text-align:left;

    font-size:18px;

    border-radius:10px;

    box-shadow:0 5px 15px rgba(0,0,0,.08);

}

.faq-resposta{

    background:#fff;

    max-height:0;

    overflow:hidden;

    transition:.4s;

    padding:0 20px;

}

/* AVALIAÇÕES */

.avaliacoes{

    width:90%;

    max-width:1100px;

    margin:80px auto;

}

.avaliacoes h2{

    text-align:center;

    color:#744c10;

    margin-bottom:35px;

}

.avaliacoes-grid{

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));

    gap:25px;

}

.avaliacao{

    background:#fff;

    padding:30px;

    border-radius:20px;

    text-align:center;

    box-shadow:0 8px 20px rgba(0,0,0,.12);

}

/* BOTÃO */

.agendar{

    text-align:center;

    margin:70px 0;

}

.btn-agendar{

    background:#744c10;

    color:white;

    text-decoration:none;

    padding:18px 40px;

    border-radius:40px;

    font-size:20px;

    font-weight:bold;

    transition:.3s;

}

.btn-agendar:hover{

    background:#ffd738;

    color:#744c10;

}

</style>

<section class="pagina-servico">

<div class="container">

<div class="titulo-servico">

<h1>Clínica Veterinária</h1>

<p>

Cuidando da saúde e do bem-estar do seu melhor amigo.

</p>

</div>

<!-- GALERIA -->

<div class="galeria">

<div class="imagem-principal">

<img
id="fotoPrincipal"
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ91ef78-Ybvtpq1qdOj_oXhdR5MtOnlftdXrs0iDxPnA&s=10"
alt="Veterinário">

</div>

<div class="miniaturas">

<img
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjmSb11FXoEMdFMlqC7tzQV8MbDuKKLFCaxkj0v-QQbw&s=10"

alt="Veterinário">

<img
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzKDBZMjq5fDWBO06qKqgT4Cn1BWDvMOxECEZ9lgkWbQ&s=10"

alt="Veterinário">

<img
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdEgjaT3wjeR45yCKlyTVUvyZ86ZB3gnSPeF7zpWqvdA&s=10"

alt="Veterinário">

<img
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGVria3DeggJLZ4FqdZ41jX_h-EM1nWZaLiEodbTP5WQ&s=10"

alt="Veterinário">

</div>

</div>

<!-- DESCRIÇÃO -->

<div class="descricao-servico">

    <h2>Sobre o serviço</h2>

    <p>

        Nossa clínica veterinária oferece atendimento completo para cães e gatos,
        sempre priorizando a saúde, o conforto e o bem-estar dos animais.

        Contamos com profissionais experientes e apaixonados pelo que fazem,
        realizando consultas, exames, vacinação, orientações preventivas e
        acompanhamento da saúde do seu pet em todas as fases da vida.

        Nosso objetivo é proporcionar um atendimento humanizado, com diagnóstico
        preciso e tratamentos personalizados para garantir mais qualidade de vida
        ao seu melhor amigo.

    </p>

</div>

<!-- BENEFÍCIOS -->

<div class="beneficios">

    <h2>O que oferecemos</h2>

    <div class="beneficios-grid">

        <div class="beneficio">

            <i class="fa-solid fa-stethoscope"></i>

            <h3>Consultas Clínicas</h3>

            <p>
                Avaliação completa da saúde do seu pet.
            </p>

        </div>

        <div class="beneficio">

            <i class="fa-solid fa-syringe"></i>

            <h3>Vacinação</h3>

            <p>
                Proteção contra diversas doenças.
            </p>

        </div>

        <div class="beneficio">

            <i class="fa-solid fa-heart-pulse"></i>

            <h3>Check-up</h3>

            <p>
                Exames preventivos para garantir uma vida saudável.
            </p>

        </div>

        <div class="beneficio">

            <i class="fa-solid fa-pills"></i>

            <h3>Tratamentos</h3>

            <p>
                Tratamentos personalizados para cada necessidade.
            </p>

        </div>

        <div class="beneficio">

            <i class="fa-solid fa-microscope"></i>

            <h3>Exames</h3>

            <p>
                Diagnóstico rápido e seguro.
            </p>

        </div>

        <div class="beneficio">

            <i class="fa-solid fa-user-doctor"></i>

            <h3>Equipe Especializada</h3>

            <p>
                Profissionais preparados para cuidar do seu melhor amigo.
            </p>

        </div>

    </div>

</div>

<!-- FAQ -->

<div class="faq">

    <h2>Perguntas Frequentes</h2>

    <div class="faq-item">

        <button class="faq-btn">

            Preciso agendar uma consulta?

            <i class="fa-solid fa-plus"></i>

        </button>

        <div class="faq-resposta">

            Sim. Recomendamos realizar o agendamento para garantir o melhor horário
            e oferecer um atendimento mais rápido ao seu pet.

        </div>

    </div>

    <div class="faq-item">

        <button class="faq-btn">

            Quais animais são atendidos?

            <i class="fa-solid fa-plus"></i>

        </button>

        <div class="faq-resposta">

            Atendemos cães e gatos de todas as idades, desde filhotes até idosos.

        </div>

    </div>

    <div class="faq-item">

        <button class="faq-btn">

            A clínica realiza vacinação?

            <i class="fa-solid fa-plus"></i>

        </button>

        <div class="faq-resposta">

            Sim. Trabalhamos com as principais vacinas recomendadas para cães e gatos,
            sempre seguindo o calendário de vacinação.

        </div>

    </div>

    <div class="faq-item">

        <button class="faq-btn">

            Vocês realizam exames?

            <i class="fa-solid fa-plus"></i>

        </button>

        <div class="faq-resposta">

            Sim. Disponibilizamos exames para auxiliar no diagnóstico e no
            acompanhamento da saúde do seu pet.

        </div>

    </div>

</div>

<!-- AVALIAÇÕES -->

<div class="avaliacoes">

    <h2>Avaliações</h2>

    <div class="avaliacoes-grid">

        <div class="avaliacao">

            ⭐⭐⭐⭐⭐

            <p>

                "Excelente atendimento! O veterinário explicou tudo com muita atenção e carinho."

            </p>

            <strong>Mariana Souza</strong>

        </div>

        <div class="avaliacao">

            ⭐⭐⭐⭐⭐

            <p>

                "Minha cachorrinha foi muito bem atendida. Recomendo a clínica."

            </p>

            <strong>Carlos Henrique</strong>

        </div>

        <div class="avaliacao">

            ⭐⭐⭐⭐⭐

            <p>

                "Equipe muito profissional, ambiente limpo e atendimento impecável."

            </p>

            <strong>Ana Oliveira</strong>

        </div>

    </div>

</div>

<!-- BOTÃO -->

<div class="agendar">

    <a href="../contato.php" class="btn-agendar">

        Agendar Atendimento

    </a>

</div>

</div>

</section>

<script>

// Troca da imagem principal

function trocarFoto(imagem){

    document.getElementById("fotoPrincipal").src = imagem.src;

}

// FAQ

const botoes = document.querySelectorAll(".faq-btn");

botoes.forEach(botao => {

    botao.addEventListener("click", () => {

        const resposta = botao.nextElementSibling;

        if(resposta.style.maxHeight){

            resposta.style.maxHeight = null;

        }else{

            resposta.style.maxHeight = resposta.scrollHeight + "px";

        }

    });

});

</script>

<?php include("../includes/footer.php"); ?>