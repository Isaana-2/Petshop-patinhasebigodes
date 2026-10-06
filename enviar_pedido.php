<?php
session_start();

if (empty($_SESSION['carrinho'])) {
    header("Location: carrinho.php");
    exit;
}

// Dados do cliente
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$celular = $_POST['celular'] ?? '';
$endereco = $_POST['endereco'] ?? '';

// ===== TESTE =====
echo "<h2>Teste dos dados recebidos</h2>";

echo "<strong>Nome:</strong> " . htmlspecialchars($nome) . "<br><br>";
echo "<strong>E-mail:</strong> " . htmlspecialchars($email) . "<br><br>";
echo "<strong>Celular:</strong> " . htmlspecialchars($celular) . "<br><br>";
echo "<strong>Endereço:</strong> " . htmlspecialchars($endereco) . "<br><br>";

echo "<h3>Produtos do Carrinho</h3>";

$total = 0;

foreach ($_SESSION['carrinho'] as $produto) {

    $subtotal = $produto['preco'] * $produto['quantidade'];
    $total += $subtotal;

    echo "Produto: " . htmlspecialchars($produto['nome']) . "<br>";
    echo "Quantidade: " . $produto['quantidade'] . "<br>";
    echo "Preço: R$ " . number_format($produto['preco'],2,",",".") . "<br>";
    echo "Subtotal: R$ " . number_format($subtotal,2,",",".") . "<br><hr>";
}

echo "<strong>Total: R$ " . number_format($total,2,",",".") . "</strong>";

// Para aqui o código.
exit;


// O código de envio de e-mail ficará abaixo.
// Ainda não será executado durante o teste.