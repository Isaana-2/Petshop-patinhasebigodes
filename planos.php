<?php include("includes/header.php"); ?>

<main>

<section class="pagina-planos">

<div class="container">

<h2>Nossos Planos</h2>

<p>
    Escolha o plano ideal para oferecer mais saúde,
    conforto e bem-estar ao seu pet.
</p>

<div class="cards">

    <!-- Plano Básico -->
    <div class="card">

        <h3>🐾 Plano Básico</h3>

        <h2>R$ 49,90</h2>

        <br>

        <p>✔ 1 Banho por mês</p>
        <p>✔ Corte de unhas</p>
        <p>✔ Limpeza dos ouvidos</p>
        <p>✔ Escovação</p>

        <br>

        <form action="https://formsubmit.co/isabela.fr09@gmail.com" method="POST">

         <button
    type="button"
    class="btn-contratar"
    onclick="abrirModal('Plano Básico','R$ 49,90')">
    Contratar
</button>

        </form>

    </div>

    <!-- Plano Premium -->
    <div class="card">

        <h3>⭐ Plano Premium</h3>

        <h2>R$ 89,90</h2>

        <br>

        <p>✔ 2 Banhos por mês</p>
        <p>✔ 1 Tosa</p>
        <p>✔ Corte de unhas</p>
        <p>✔ Hidratação dos pelos</p>
        <p>✔ Perfume</p>

        <br>

        <form action="https://formsubmit.co/isabela.fr09@gmail.com" method="POST">

        <button
    type="button"
    class="btn-contratar"
    onclick="abrirModal('Plano VIP','R$ 149,90')">
    Contratar
</button>

        </form>

    </div>

    <!-- Plano VIP -->
    <div class="card">

        <h3>👑 Plano VIP</h3>

        <h2>R$ 149,90</h2>

        <br>

        <p>✔ Banhos ilimitados</p>
        <p>✔ Tosa ilimitada</p>
        <p>✔ Consulta Veterinária</p>
        <p>✔ Vacinação</p>
        <p>✔ Desconto em produtos</p>

        <br>

        <form action="https://formsubmit.co/isabela.fr09@gmail.com" method="POST">

           <button
class="btn-contratar"
onclick="abrirModal('Plano VIP','R$ 149,90')">
Contratar
</button>

        </form>

    </div>

</div>

</div>

</section>
<!-- MODAL -->

<div id="modalPlano" class="modal">

    <div class="modal-content">

        <span class="fechar" onclick="fecharModal()">&times;</span>

        <h2 id="tituloPlano"></h2>

        <form action="https://formsubmit.co/isabela.fr09@gmail.com" method="POST">

            <input type="hidden" name="_subject" value="Nova Solicitação de Plano">

            <input type="hidden" name="_captcha" value="false">

            <input type="hidden" id="plano" name="Plano">

            <input type="hidden" id="valor" name="Valor">

            <label>Nome</label>

            <input type="text" name="Nome" required>

            <label>E-mail</label>

            <input type="email" name="Email" required>

            <label>Celular</label>

            <input type="tel" name="Celular" required>

            <button type="submit">
                Confirmar Contratação
            </button>

        </form>

    </div>

</div>
</main>
<script>

function abrirModal(plano, valor){

    document.getElementById("modalPlano").style.display="flex";

    document.getElementById("tituloPlano").innerHTML=plano;

    document.getElementById("plano").value=plano;

    document.getElementById("valor").value=valor;

}

function fecharModal(){

    document.getElementById("modalPlano").style.display="none";

}

window.onclick=function(event){

    let modal=document.getElementById("modalPlano");

    if(event.target==modal){

        modal.style.display="none";

    }

}

</script>
<?php include("includes/footer.php"); ?>