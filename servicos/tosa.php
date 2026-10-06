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

    background:url("COLE_A_URL_DO_BANNER_DA_TOSA") center center;
    background-size:cover;
    background-position:center;

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
    z-index:2;
    text-align:center;
    color:#fff;

}

.texto-banner h1{

    font-size:60px;
    margin-bottom:20px;

}

.texto-banner p{

    font-size:24px;

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

    box-shadow:0 20px 40px rgba(0,0,0,.15);

    transition:.3s;

}

.beneficio:hover{

    transform:translateY(-10px);

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

}

/* FAQ */

.faq{

    width:90%;
    max-width:900px;

    margin:80px auto;

}

.faq h2{

    text-align:center;

    color:#744c10;

    margin-bottom:30px;

}

.faq-item{

    margin-bottom:15px;

}

.faq-btn{

    width:100%;

    padding:20px;

    border:none;

    cursor:pointer;

    background:#fff;

    border-radius:10px;

    font-size:18px;

    text-align:left;

    box-shadow:0 5px 15px rgba(0,0,0,.08);

}

.faq-resposta{

    max-height:0;

    overflow:hidden;

    transition:.4s;

    background:#fff;

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

.agendar{

    text-align:center;

    margin:70px 0;

}

.btn-agendar{

    background:#744c10;

    color:#fff;

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

<h1>Tosa Profissional</h1>

<p>
Beleza, higiene e conforto para o seu melhor amigo.
</p>

</div>

<!-- GALERIA -->

<div class="galeria">

<div class="imagem-principal">

<img
id="fotoPrincipal"
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjXLq1npxeiSHtxx9H7o3J0mlDzxgfqrw-SCQLT3mGvA&s=10"
alt="Tosa">

</div>

<div class="miniaturas">

<img
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5EzD46NNROMZ28XQ9GdNO84-xtnrAbQLoH6hqioiIPQ&s=10"

alt="Tosa">

<img
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReSMnjYtfsuuHPgsIilrnHDM57yi2l06Rp2aduLpHcpg&s=10"

alt="Tosa">

<img
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuWUXYw4GIE4uBynBfKYjbPGrzOb8HtGv-Gt4MiQCoAw&s=10"

alt="Tosa">

</div>

</div>

<!-- DESCRIÇÃO -->

<div class="descricao-servico">

    <h2>Sobre o serviço</h2>

    <p>

        A tosa é muito mais do que estética: ela contribui para a higiene,
        saúde e conforto do seu pet.

        Nossa equipe utiliza equipamentos modernos e técnicas específicas
        para cada raça e tipo de pelagem, sempre respeitando o bem-estar
        do animal.

        Trabalhamos com tosa higiênica, tosa na tesoura, tosa da raça e
        acabamentos personalizados para deixar seu companheiro bonito,
        confortável e feliz.

    </p>

</div>

<!-- BENEFÍCIOS -->

<div class="beneficios">

    <h2>O que está incluso</h2>

    <div class="beneficios-grid">

        <div class="beneficio">

            <i class="fa-solid fa-scissors"></i>

            <h3>Tosa Higiênica</h3>

            <p>
                Mantém a higiene e o conforto do seu pet.
            </p>

        </div>

        <div class="beneficio">

            <i class="fa-solid fa-paw"></i>

            <h3>Tosa da Raça</h3>

            <p>
                Respeitando o padrão e estilo de cada raça.
            </p>

        </div>

        <div class="beneficio">

            <i class="fa-solid fa-star"></i>

            <h3>Acabamento Premium</h3>

            <p>
                Visual bonito e acabamento profissional.
            </p>

        </div>

        <div class="beneficio">

            <i class="fa-solid fa-soap"></i>

            <h3>Higienização</h3>

            <p>
                Limpeza das áreas sensíveis com muito cuidado.
            </p>

        </div>

        <div class="beneficio">

            <i class="fa-solid fa-hand-holding-heart"></i>

            <h3>Atendimento Humanizado</h3>

            <p>
                Muito carinho e paciência durante todo o procedimento.
            </p>

        </div>

        <div class="beneficio">

            <i class="fa-solid fa-heart"></i>

            <h3>Bem-estar</h3>

            <p>
                Seu pet fica bonito, confortável e saudável.
            </p>

        </div>

    </div>

</div>

<!-- FAQ -->

<div class="faq">

    <h2>Perguntas Frequentes</h2>

    <div class="faq-item">

        <button class="faq-btn">

            Quanto tempo dura a tosa?

            <i class="fa-solid fa-plus"></i>

        </button>

        <div class="faq-resposta">

            O procedimento leva entre 1 e 2 horas,
            dependendo do porte, da raça e do tipo
            de pelagem do animal.

        </div>

    </div>

    <div class="faq-item">

        <button class="faq-btn">

            A tosa pode ser feita em qualquer raça?

            <i class="fa-solid fa-plus"></i>

        </button>

        <div class="faq-resposta">

            Sim. Cada raça possui um tipo de tosa recomendado,
            e nossos profissionais orientam a melhor opção.

        </div>

    </div>

    <div class="faq-item">

        <button class="faq-btn">

            Preciso agendar?

            <i class="fa-solid fa-plus"></i>

        </button>

        <div class="faq-resposta">

            Sim. Recomendamos realizar o agendamento para
            garantir o melhor horário para o seu pet.

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

                "Meu cachorro ficou lindo! A equipe foi muito atenciosa."

            </p>

            <strong>Juliana Martins</strong>

        </div>

        <div class="avaliacao">

            ⭐⭐⭐⭐⭐

            <p>

                "A melhor tosa da cidade. Muito cuidado e carinho com os animais."

            </p>

            <strong>Ricardo Alves</strong>

        </div>

        <div class="avaliacao">

            ⭐⭐⭐⭐⭐

            <p>

                "Atendimento excelente. Meu pet saiu muito bonito e tranquilo."

            </p>

            <strong>Fernanda Costa</strong>

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

function trocarFoto(imagem){

    document.getElementById("fotoPrincipal").src = imagem.src;

}

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