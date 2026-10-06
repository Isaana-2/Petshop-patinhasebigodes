<?php include("../includes/header.php"); ?>



<style>

.banner-servico{

    position:relative;
    width:100%;
    height:600px;

    background:url("COLE_A_URL_DA_IMAGEM") center center;
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

}a

.texto-banner p{

    font-size:24px;

}

.beneficios{

    width:90%;
    max-width:1200px;

    margin:-120px auto 80px;

    position:relative;
    z-index:20;

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
    margin-bottom:40px;
    color:#744c10;

}

.beneficios-grid{

    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;

}

.beneficio{

    background:#fff;
    padding:30px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,.12);
    transition:.3s;

}

.beneficio:hover{

    transform:translateY(-10px);

}

.beneficio i{

    font-size:40px;
    color:#744c10;
    margin-bottom:20px;

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

.avaliacao p{

    margin:20px 0;

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

            <h1>Banho Premium</h1>

            <p>
                O cuidado que seu melhor amigo merece.
            </p>

        </div>

        <!-- GALERIA -->

        <div class="galeria">

            <div class="imagem-principal">

                <img
    id="fotoPrincipal"
    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU1vKv7lGBn6QvDlaF6q1dHfFR9xMxC-cG48ZU7vPisg&s=10"
    alt="Banho">

            </div>

            <div class="miniaturas">

                <img
                   
    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDrxq6akqnpVcrzx_VZYGfsZilgVpVco05AyQpftHycA&s=10"
   
    alt="Banho">

                <img
                     src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU1vKv7lGBn6QvDlaF6q1dHfFR9xMxC-cG48ZU7vPisg&s=10"

    alt="Banho">

                <img
                     src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1G_K98dgZMOPWhOtkevKpuEBUFznsageVWonZw86p6g&s=10"

    alt="Banho">

            </div>

        </div>

        <!-- DESCRIÇÃO -->

        <div class="descricao-servico">

            <h2>Sobre o serviço</h2>

            <p>

                Nosso banho é realizado por profissionais experientes,
                utilizando produtos específicos para cada tipo de pelagem.

                Todo o processo é pensado para proporcionar conforto,
                higiene e bem-estar ao seu pet.

            </p>

        </div>

        <!-- BENEFÍCIOS -->

        <div class="beneficios">

            <h2>O que está incluso</h2>

            <div class="beneficios-grid">

                <div class="beneficio">
                    <i class="fa-solid fa-soap"></i>
                    <h3>Shampoo Premium</h3>
                    <p>Produtos de alta qualidade.</p>
                </div>

                <div class="beneficio">
                    <i class="fa-solid fa-droplet"></i>
                    <h3>Hidratação</h3>
                    <p>Mais brilho e maciez para os pelos.</p>
                </div>

                <div class="beneficio">
                    <i class="fa-solid fa-wind"></i>
                    <h3>Secagem</h3>
                    <p>Secagem completa e confortável.</p>
                </div>

                <div class="beneficio">
                    <i class="fa-solid fa-scissors"></i>
                    <h3>Corte de Unhas</h3>
                    <p>Mais segurança para o pet.</p>
                </div>

                <div class="beneficio">
                    <i class="fa-solid fa-ear-listen"></i>
                    <h3>Limpeza das Orelhas</h3>
                    <p>Higiene completa.</p>
                </div>

                <div class="beneficio">
                    <i class="fa-solid fa-heart"></i>
                    <h3>Muito Carinho</h3>
                    <p>Atendimento humanizado.</p>
                </div>

            </div>

        </div>

        <!-- FAQ -->

        <div class="faq">

            <h2>Perguntas Frequentes</h2>

            <div class="faq-item">

                <button class="faq-btn">

                    Quanto tempo dura o banho?

                    <i class="fa-solid fa-plus"></i>

                </button>

                <div class="faq-resposta">

                    Aproximadamente 1 hora, podendo variar conforme o porte do pet.

                </div>

            </div>

            <div class="faq-item">

                <button class="faq-btn">

                    Quais produtos são utilizados?

                    <i class="fa-solid fa-plus"></i>

                </button>

                <div class="faq-resposta">

                    Utilizamos produtos específicos para cada tipo de pelagem.

                </div>

            </div>

            <div class="faq-item">

                <button class="faq-btn">

                    Preciso agendar?

                    <i class="fa-solid fa-plus"></i>

                </button>

                <div class="faq-resposta">

                    Sim. Recomendamos o agendamento para garantir o melhor horário.

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

                        "Excelente atendimento e muito carinho com meu cachorro."

                    </p>

                    <strong>Maria Souza</strong>

                </div>

                <div class="avaliacao">

                    ⭐⭐⭐⭐⭐

                    <p>

                        "Meu pet saiu muito cheiroso e feliz."

                    </p>

                    <strong>Carlos Lima</strong>

                </div>

                <div class="avaliacao">

                    ⭐⭐⭐⭐⭐

                    <p>

                        "Serviço impecável. Recomendo."

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

function trocarFoto(imagem){

    document.getElementById("fotoPrincipal").src = imagem.src;

}

const botoes=document.querySelectorAll(".faq-btn");

botoes.forEach(botao=>{

    botao.addEventListener("click",()=>{

        botao.classList.toggle("ativo");

        const resposta=botao.nextElementSibling;

        if(resposta.style.maxHeight){

            resposta.style.maxHeight=null;

        }else{

            resposta.style.maxHeight=resposta.scrollHeight+"px";

        }

    });

});

</script>

<?php include("../includes/footer.php"); ?>