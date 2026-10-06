<?php
session_start();
include("includes/header.php");

$total = 0;

// Monta a mensagem
$mensagem = "NOVO PEDIDO - LOJA PET\n\n";

$total = 0;

if(isset($_SESSION['carrinho'])){

    foreach($_SESSION['carrinho'] as $produto){

        $subtotal = $produto['preco'] * $produto['quantidade'];
        $total += $subtotal;

        $mensagem .= "🐾 Produto: ".$produto['nome']."\n";
        $mensagem .= "📦 Quantidade: ".$produto['quantidade']."\n";
        $mensagem .= "💰 Subtotal: R$ ".number_format($subtotal,2,",",".")."\n";
        $mensagem .= "----------------------\n";
    }
}

$mensagem .= "\nTOTAL: R$ ".number_format($total,2,",",".");

?>

<main>

<section class="carrinho-container">

<div class="container">

<h2>🛒 Meu Carrinho</h2>

<?php if(empty($_SESSION['carrinho'])){ ?>

<div class="carrinho-vazio">

<h3>Seu carrinho está vazio </h3>

<p>Adicione alguns produtos para continuar.</p>

<a href="produtos.php" class="finalizar">

Ver Produtos

</a>

</div>

<?php }else{ ?>

<table class="tabela-carrinho">

<thead>

<tr>

<th>Imagem</th>

<th>Produto</th>

<th>Preço</th>

<th>Quantidade</th>

<th>Subtotal</th>

<th>Ações</th>

</tr>

</thead>

<tbody>

<?php foreach($_SESSION['carrinho'] as $produto){

$subtotal = $produto['preco'] * $produto['quantidade'];

?>

<tr>

<td>

<img
src="<?= $produto['imagem']; ?>"
width="80"
>

</td>

<td>

<?= $produto['nome']; ?>

</td>

<td>

R$ <?= number_format($produto['preco'],2,",","."); ?>

</td>

<td>

<?= $produto['quantidade']; ?>

</td>

<td>

R$ <?= number_format($subtotal,2,",","."); ?>

</td>

<td>

<a
class="btn-acao btn-mais"
href="atualizar_carrinho.php?produto=<?= urlencode($produto['nome']); ?>&acao=mais">

+

</a>

<a
class="btn-acao btn-menos"
href="atualizar_carrinho.php?produto=<?= urlencode($produto['nome']); ?>&acao=menos">

−

</a>

<a
class="btn-acao btn-remover"
href="remover_carrinho.php?produto=<?= urlencode($produto['nome']); ?>"
onclick="return confirm('Remover este produto?')">

🗑️

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

<div class="total">

Total: R$ <?= number_format($total,2,",","."); ?>

</div>


<form action="https://formsubmit.co/isabela.fr09@gmail.com" method="POST">

    <label>Nome</label>
    <input type="text" name="Nome" required>

    <label>E-mail</label>
    <input type="email" name="Email" required>

    <label>Celular</label>
    <input type="tel" name="Celular" required>

    <label>Endereço</label>
    <input type="text" name="Endereço" required>

    <textarea name="Pedido" hidden><?= htmlspecialchars($mensagem) ?></textarea>

    <input type="hidden" name="_subject" value="Novo Pedido - Loja Pet">
    <input type="hidden" name="_captcha" value="false">

    <button type="submit" class="finalizar">
        📧 Finalizar Pedido
    </button>

</form>
<a
class="limpar-carrinho"
href="limpar_carrinho.php"
onclick="return confirm('Deseja realmente esvaziar o carrinho?');">

🗑️ Limpar Carrinho

</a>
📲 Você deverá finalizar a compra pelo E-mail

</a>

<?php } ?>

</div>

</section>

</main>

<?php include("includes/footer.php"); ?>