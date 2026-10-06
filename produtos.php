<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("includes/header.php");
include("includes/conexao.php");


// ======================================================
// PRODUTOS FIXOS
// ======================================================

$produtos = [

    [
        "categoria" => "Areia",
        "nome" => "Areia Higiênica",
        "descricao" => "Areia de alta absorção para higiene do seu gato.",
        "descricaoCompleta" => "Pacote com 4 kg de areia higiênica premium. Produzida com minerais naturais de alta absorção, controla odores por até 30 dias, forma torrões firmes e gera pouca poeira.",
        "preco" => 40.90,
        "imagem" => "includes/img/areia.jpg"
    ],

    [
        "categoria" => "Areia",
        "nome" => "Areia Higiênica Biodegradável",
        "descricao" => "Areia biodegradável para gatos.",
        "descricaoCompleta" => "Areia higiênica biodegradável produzida com ingredientes naturais, formando torrões instantaneamente, controlando odores e facilitando a limpeza da caixa de areia.",
        "preco" => 34.90,
        "imagem" => "includes/img/areiagato2.png"
    ],

    [
        "categoria" => "Brinquedos",
        "nome" => "Brinquedos",
        "descricao" => "Brinquedos resistentes para diversão e bem-estar.",
        "descricaoCompleta" => "Brinquedo interativo confeccionado em borracha atóxica e corda de algodão reforçada. Auxilia no desenvolvimento físico e mental, estimula a mastigação e proporciona momentos de diversão para cães e gatos.",
        "preco" => 20.50,
        "imagem" => "includes/img/brinquedo.jpg"
    ],

    [
        "categoria" => "Brinquedos",
        "nome" => "Bola Interativa com Ratinho",
        "descricao" => "Brinquedo divertido para gatos.",
        "descricaoCompleta" => "Bola de arame com ratinho de pelúcia no interior, estimulando o instinto de caça e proporcionando diversão e exercícios para o gato.",
        "preco" => 14.90,
        "imagem" => "includes/img/brinquedogato1.png"
    ],

    [
        "categoria" => "Brinquedos",
        "nome" => "Varinha Interativa para Gatos",
        "descricao" => "Varinha com penas para brincar.",
        "descricaoCompleta" => "Brinquedo interativo composto por haste flexível com penas coloridas, ideal para estimular os reflexos, a atividade física e a diversão do gato.",
        "preco" => 24.90,
        "imagem" => "includes/img/brinquedogato.png"
    ],

    [
        "categoria" => "Acessórios",
        "nome" => "Bebedouro",
        "descricao" => "Bebedouro e comedouro para cães e gatos.",
        "descricaoCompleta" => "Bebedouro e comedouro 2 em 1 fabricado em plástico resistente livre de BPA. Possui capacidade para 1,5 litro de água e 500 g de ração, além de base antiderrapante para maior estabilidade.",
        "preco" => 49.90,
        "imagem" => "includes/img/bebedouro.jpg"
    ],

    [
        "categoria" => "Acessórios",
        "nome" => "Comedouro Duplo para Cães",
        "descricao" => "Comedouro em madeira com tigelas de inox.",
        "descricaoCompleta" => "Comedouro duplo para cães, fabricado em madeira resistente com duas tigelas removíveis em aço inox. Ideal para servir água e ração, sendo fácil de limpar e oferecendo mais conforto durante a alimentação.",
        "preco" => 89.90,
        "imagem" => "includes/img/comedourocao.png"
    ],

    [
        "categoria" => "Acessórios",
        "nome" => "Fonte Bebedouro para Cães",
        "descricao" => "Fonte automática para água.",
        "descricaoCompleta" => "Fonte elétrica para cães que mantém a água sempre limpa e em movimento, incentivando o consumo de água e contribuindo para a saúde do pet.",
        "preco" => 129.90,
        "imagem" => "includes/img/bebedourucao.png"
    ],

    [
        "categoria" => "Acessórios",
        "nome" => "Fonte Bebedouro para Gatos",
        "descricao" => "Fonte automática de água para gatos.",
        "descricaoCompleta" => "Bebedouro automático com circulação contínua da água, ajudando a manter a hidratação do gato com água fresca e filtrada durante todo o dia.",
        "preco" => 99.90,
        "imagem" => "includes/img/bebedourogato.png"
    ],

    [
        "categoria" => "Acessórios",
        "nome" => "Bandana Estampada para Gatos",
        "descricao" => "Bandana confortável e estilosa.",
        "descricaoCompleta" => "Bandana com estampa animal print, confeccionada em tecido macio e confortável, ideal para deixar o gato ainda mais elegante.",
        "preco" => 19.90,
        "imagem" => "includes/img/bandana.png"
    ],

    [
        "categoria" => "Coleira",
        "nome" => "Coleira para Gato",
        "descricao" => "Coleira confortável e ajustável.",
        "descricaoCompleta" => "Coleira confeccionada em nylon macio e resistente, com regulagem de 20 a 30 cm, fecho de segurança e guizo removível. Indicada para gatos de pequeno e médio porte.",
        "preco" => 29.99,
        "imagem" => "includes/img/coleira gato.jpg"
    ],

    [
        "categoria" => "Coleira",
        "nome" => "Coleira para Cão",
        "descricao" => "Coleira resistente para passeios.",
        "descricaoCompleta" => "Coleira produzida em nylon reforçado com fecho de alta resistência e regulagem de tamanho. Ideal para passeios diários, oferecendo conforto e segurança para cães de porte médio.",
        "preco" => 29.33,
        "imagem" => "includes/img/coleira cao.jpg"
    ],

    [
        "categoria" => "Higiene",
        "nome" => "Kit Banho",
        "descricao" => "Shampoo e condicionador para pelagem saudável.",
        "descricaoCompleta" => "Kit contendo shampoo e condicionador de 500 ml cada. Fórmula enriquecida com aloe vera e extrato de aveia, promovendo limpeza profunda, hidratação e brilho para a pelagem.",
        "preco" => 70.91,
        "imagem" => "includes/img/kit-banho.jpg"
    ],

    [
        "categoria" => "Higiene",
        "nome" => "Kit de Higiene para Cães",
        "descricao" => "Kit completo para manter seu cão sempre limpo e saudável.",
        "descricaoCompleta" => "Kit de higiene completo para cães contendo shampoo, condicionador, spray bucal, limpa orelhas, limpa lágrimas, perfume, escova dental, gel dental e lenços umedecidos. Ideal para os cuidados diários, promovendo limpeza, higiene bucal, pelagem macia e perfumada, além de contribuir para o bem-estar e a saúde do seu pet.",
        "preco" => 129.90,
        "imagem" => "includes/img/kitcao.png"
    ],

    [
        "categoria" => "Higiene",
        "nome" => "Kit de Higiene para Gatos",
        "descricao" => "Kit prático para a higiene e os cuidados do seu gato.",
        "descricaoCompleta" => "Kit de higiene para gatos contendo lenços umedecidos, talco para gatos, banho a seco e spray para banho a seco. Desenvolvido para facilitar a limpeza sem a necessidade de banho com água, mantendo a pelagem limpa, macia, perfumada e proporcionando mais conforto ao seu gato.",
        "preco" => 79.90,
        "imagem" => "includes/img/kitgato.png"
    ],

    [
        "categoria" => "Acessórios",
        "nome" => "Laços",
        "descricao" => "Laços decorativos para deixar seu pet estiloso.",
        "descricaoCompleta" => "Kit com 5 laços decorativos confeccionados em fita de cetim premium, com elástico resistente e acabamento delicado. Perfeitos para cães e gatos após o banho e tosa.",
        "preco" => 40.99,
        "imagem" => "includes/img/lacos.jpg"
    ],

    [
        "categoria" => "Acessórios",
        "nome" => "Comedouro para Gatos",
        "descricao" => "Comedouro em formato de gatinho.",
        "descricaoCompleta" => "Comedouro moderno e resistente para gatos, produzido em material de alta qualidade, fácil de limpar e com design divertido.",
        "preco" => 39.90,
        "imagem" => "includes/img/comedourogato.png"
    ],

    [
        "categoria" => "Rações",
        "nome" => "Ração para Cães",
        "descricao" => "Nutrição completa para cães.",
        "descricaoCompleta" => "Embalagem com 10 kg de ração premium para cães adultos. Rica em proteínas, vitaminas, minerais e ômega 3 e 6, contribuindo para músculos fortes, pelagem saudável e ótima digestão.",
        "preco" => 89.39,
        "imagem" => "includes/img/racao-cao.jpg"
    ],

    [
        "categoria" => "Rações",
        "nome" => "Ração para Gatos",
        "descricao" => "Nutrição balanceada para gatos.",
        "descricaoCompleta" => "Pacote com 10 kg de ração premium para gatos adultos. Fórmula balanceada com taurina, vitaminas e minerais que auxiliam na saúde urinária, digestiva e na manutenção da pelagem.",
        "preco" => 79.98,
        "imagem" => "includes/img/racao-gato.jpg"
    ],

    [
        "categoria" => "Sachês",
        "nome" => "Sachê",
        "descricao" => "Alimento úmido saboroso para gatos.",
        "descricaoCompleta" => "Caixa com 20 sachês de 85 g cada. Alimento úmido preparado com carnes selecionadas, vitaminas e minerais essenciais, proporcionando uma refeição nutritiva, saborosa e de alta digestibilidade.",
        "preco" => 40.57,
        "imagem" => "includes/img/sache.jpg"
    ],

    [
        "categoria" => "Sachês",
        "nome" => "Sachê para Cães Pedigree",
        "descricao" => "Alimento úmido para cães.",
        "descricaoCompleta" => "Caixa com 36 sachês Pedigree sabor carne. Alimento completo, rico em vitaminas e minerais, ideal para complementar a alimentação diária do seu cão.",
        "preco" => 54.90,
        "imagem" => "includes/img/sachecao.jpg"
    ],

    [
        "categoria" => "Petiscos",
        "nome" => "Manjubinha",
        "descricao" => "Petisco natural rico em proteínas.",
        "descricaoCompleta" => "Pacote com 100 g de manjubinha desidratada 100% natural, sem corantes nem conservantes. Rica em proteínas, cálcio e ômega 3, é uma excelente opção de petisco saudável para cães e gatos.",
        "preco" => 12.76,
        "imagem" => "includes/img/manjubinha.jpg"
    ],

    [
        "categoria" => "Petiscos",
        "nome" => "Petisco Friskies Party Mix",
        "descricao" => "Petisco crocante para gatos.",
        "descricaoCompleta" => "Petisco Purina Friskies Party Mix sabor frango e carne. Ideal para recompensar seu gato com muito sabor e nutrientes.",
        "preco" => 12.90,
        "imagem" => "includes/img/petiscogato.png"
    ],

    [
        "categoria" => "Petiscos",
        "nome" => "Petisco para Cães",
        "descricao" => "Petisco saudável para cães.",
        "descricaoCompleta" => "Petisco indicado para cães de todos os portes, auxiliando na saúde bucal e proporcionando momentos de diversão e recompensa.",
        "preco" => 18.90,
        "imagem" => "includes/img/petiscocao.png"
    ]

];


// ======================================================
// PRODUTOS CADASTRADOS NO BANCO DE DADOS
// ======================================================

$resultadoBanco = $conexao->query("
    SELECT 
        id,
        categoria,
        nome,
        descricao,
        descricaoCompleta,
        preco,
        imagem
    FROM produtos
    ORDER BY id ASC
");


if ($resultadoBanco) {

    while ($produtoBanco = $resultadoBanco->fetch_assoc()) {

        $existe = false;

        foreach ($produtos as $produtoExistente) {

            if (
                strtolower(trim($produtoExistente['nome'])) ===
                strtolower(trim($produtoBanco['nome']))
            ) {

                $existe = true;
                break;
            }
        }


        if (!$existe) {

            $produtos[] = [

                "id" => $produtoBanco['id'],

                "categoria" => $produtoBanco['categoria'],

                "nome" => $produtoBanco['nome'],

                "descricao" => !empty($produtoBanco['descricao'])
                    ? $produtoBanco['descricao']
                    : "Produto disponível em nossa loja.",

                "descricaoCompleta" => !empty($produtoBanco['descricaoCompleta'])
                    ? $produtoBanco['descricaoCompleta']
                    : "Confira este produto disponível na Patinhas e Bigodes.",

                "preco" => (float)$produtoBanco['preco'],

                "imagem" => $produtoBanco['imagem']
            ];
        }
    }
}


// ======================================================
// CATEGORIAS
// ======================================================

$categorias = [

    "Rações",
    "Sachês",
    "Petiscos",
    "Areia",
    "Higiene",
    "Brinquedos",
    "Acessórios",
    "Coleira"

];


// Adiciona categorias novas cadastradas pelo administrador.

foreach ($produtos as $produto) {

    if (
        !in_array(
            $produto['categoria'],
            $categorias,
            true
        )
    ) {

        $categorias[] = $produto['categoria'];
    }
}


// ======================================================
// PESQUISA
// ======================================================

$busca = isset($_GET['busca'])
    ? trim($_GET['busca'])
    : '';


// Por padrão mostra todos os produtos.

$produtosExibicao = $produtos;


// Se houver pesquisa, filtra os produtos.

if ($busca !== '') {

    $produtosExibicao = array_filter(
        $produtos,
        function ($produto) use ($busca) {

            $nome = $produto['nome'] ?? '';

            $categoria = $produto['categoria'] ?? '';

            $descricao = $produto['descricao'] ?? '';

            $descricaoCompleta = $produto['descricaoCompleta'] ?? '';


            return
                stripos($nome, $busca) !== false ||

                stripos($categoria, $busca) !== false ||

                stripos($descricao, $busca) !== false ||

                stripos($descricaoCompleta, $busca) !== false;
        }
    );
}


// ======================================================
// CATEGORIAS DOS PRODUTOS ENCONTRADOS
// ======================================================

$categoriasExibicao = [];


foreach ($produtosExibicao as $produto) {

    if (
        !in_array(
            $produto['categoria'],
            $categoriasExibicao,
            true
        )
    ) {

        $categoriasExibicao[] = $produto['categoria'];
    }
}

?>


<!-- =====================================================
     CORREÇÃO DO TAMANHO DAS IMAGENS
====================================================== -->

<style>

.imagem-produto {
    width: 100% !important;
    height: 220px !important;
    max-width: 100% !important;
    max-height: 220px !important;
    object-fit: contain !important;
    display: block !important;
    margin: 0 auto;
    cursor: pointer;
}

.produto-card {
    overflow: hidden;
}

<?php if ($busca !== '') { ?>

.resultado-pesquisa-titulo {
    text-align: center;
    margin: 20px 0 35px;
    color: #4B2B19;
    font-family: 'Poppins', sans-serif;
}

.resultado-pesquisa-titulo strong {
    color: #D99500;
}

.nenhum-produto {
    width: 100%;
    text-align: center;
    padding: 50px 20px;
    background: #FFF9E8;
    border-radius: 15px;
    margin: 20px 0 50px;
    color: #4B2B19;
    font-family: 'Poppins', sans-serif;
}

.nenhum-produto i {
    font-size: 40px;
    margin-bottom: 15px;
    display: block;
}

<?php } ?>

</style>


<!-- =====================================================
     MODAL DO PRODUTO
====================================================== -->

<div id="modalProduto" class="modal-produto">

    <div class="modal-conteudo">

        <span
            class="fechar"
            onclick="fecharModal()"
        >
            &times;
        </span>


        <img
            id="modalImagem"
            src=""
            alt="Produto"
        >


        <div class="modal-info">

            <h2 id="modalTitulo"></h2>

            <p id="modalDescricao"></p>

            <h3 id="modalPreco"></h3>

        </div>

    </div>

</div>


<!-- =====================================================
     CONTEÚDO
====================================================== -->

<main>

<section class="porque-escolher">

<div class="container">


    <h2 class="titulo">
        Nossos Produtos
    </h2>


    <?php if ($busca !== '') { ?>

        <div class="resultado-pesquisa-titulo">

            Resultados para:
            <strong>
                "<?= htmlspecialchars($busca, ENT_QUOTES, 'UTF-8'); ?>"
            </strong>

        </div>

    <?php } else { ?>

        <p class="subtitulo">
            Tudo que seu pet precisa em um só lugar 🐶🐱
        </p>

    <?php } ?>


    <!-- =================================================
         NENHUM RESULTADO
    ================================================== -->

    <?php if (empty($produtosExibicao)) { ?>

        <div class="nenhum-produto">

            <i class="fa-solid fa-magnifying-glass"></i>

            <h3>
                Nenhum produto encontrado
            </h3>

            <p>
                Tente pesquisar por outro nome,
                categoria ou produto.
            </p>

        </div>


    <?php } else { ?>


        <!-- =============================================
             CATEGORIAS
        ============================================== -->

        <?php foreach ($categoriasExibicao as $categoria) { ?>


            <?php

            $temProdutoNaCategoria = false;

            foreach ($produtosExibicao as $produto) {

                if (
                    $produto['categoria'] === $categoria
                ) {

                    $temProdutoNaCategoria = true;
                    break;
                }
            }

            ?>


            <?php if ($temProdutoNaCategoria) { ?>


                <h2 class="titulo-categoria">

                    <?= htmlspecialchars(
                        $categoria,
                        ENT_QUOTES,
                        'UTF-8'
                    ); ?>

                </h2>


                <div class="grid-produtos">


                    <?php foreach ($produtosExibicao as $produto) { ?>


                        <?php if ($produto['categoria'] === $categoria) { ?>


                            <?php

                            $imagem = $produto['imagem'];

                            $nome = $produto['nome'];

                            $descricao = $produto['descricao'];

                            $descricaoCompleta =
                                $produto['descricaoCompleta']
                                ?? $descricao;

                            $preco = $produto['preco'];

                            ?>


                            <div class="produto-card">


                                <!-- IMAGEM -->

                                <img

                                    src="<?= htmlspecialchars(
                                        $imagem,
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ); ?>"

                                    alt="<?= htmlspecialchars(
                                        $nome,
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ); ?>"

                                    class="imagem-produto"

                                    onclick="abrirModal(
                                        <?= htmlspecialchars(
                                            json_encode($imagem),
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?>,

                                        <?= htmlspecialchars(
                                            json_encode($nome),
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?>,

                                        <?= htmlspecialchars(
                                            json_encode($descricaoCompleta),
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?>,

                                        <?= htmlspecialchars(
                                            json_encode(
                                                'R$ ' .
                                                number_format(
                                                    $preco,
                                                    2,
                                                    ',',
                                                    '.'
                                                )
                                            ),
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?>
                                    )"
                                >


                                <!-- NOME -->

                                <h3>

                                    <?= htmlspecialchars(
                                        $nome,
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ); ?>

                                </h3>


                                <!-- DESCRIÇÃO -->

                                <p>

                                    <?= htmlspecialchars(
                                        $descricao,
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ); ?>

                                </p>


                                <!-- PREÇO -->

                                <span>

                                    R$

                                    <?= number_format(
                                        $preco,
                                        2,
                                        ",",
                                        "."
                                    ); ?>

                                </span>


                                <!-- CARRINHO -->

                                <form
                                    action="adicionar_carrinho.php"
                                    method="POST"
                                >


                                    <input
                                        type="hidden"
                                        name="nome"
                                        value="<?= htmlspecialchars(
                                            $nome,
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?>"
                                    >


                                    <input
                                        type="hidden"
                                        name="preco"
                                        value="<?= htmlspecialchars(
                                            $preco,
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?>"
                                    >


                                    <input
                                        type="hidden"
                                        name="imagem"
                                        value="<?= htmlspecialchars(
                                            $imagem,
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?>"
                                    >


                                    <button type="submit">

                                        <i class="fa-solid fa-cart-plus"></i>

                                        Adicionar ao Carrinho

                                    </button>


                                </form>


                            </div>


                        <?php } ?>


                    <?php } ?>


                </div>


            <?php } ?>


        <?php } ?>


    <?php } ?>


</div>

</section>

</main>


<!-- =====================================================
     JAVASCRIPT DO MODAL
====================================================== -->

<script>

function abrirModal(
    imagem,
    nome,
    descricao,
    preco
) {

    document.getElementById(
        "modalProduto"
    ).style.display = "flex";


    document.getElementById(
        "modalImagem"
    ).src = imagem;


    document.getElementById(
        "modalTitulo"
    ).innerHTML = nome;


    document.getElementById(
        "modalDescricao"
    ).innerHTML = descricao;


    document.getElementById(
        "modalPreco"
    ).innerHTML = preco;

}


function fecharModal() {

    document.getElementById(
        "modalProduto"
    ).style.display = "none";

}


window.onclick = function(e) {

    const modal =
        document.getElementById(
            "modalProduto"
        );


    if (e.target === modal) {

        fecharModal();

    }

};

</script>


<?php include("includes/footer.php"); ?>