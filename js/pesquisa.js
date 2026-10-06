document.addEventListener("DOMContentLoaded", function () {

    const campoPesquisa =
        document.getElementById("pesquisa");

    const resultados =
        document.getElementById("resultado-pesquisa");


    if (!campoPesquisa || !resultados) {

        return;

    }


    let tempoPesquisa;


    /* ==========================================
       DIGITAR NA PESQUISA
    ========================================== */

    campoPesquisa.addEventListener(
        "input",
        function () {

            const busca =
                this.value.trim();


            clearTimeout(tempoPesquisa);


            if (busca.length < 2) {

                resultados.innerHTML = "";

                resultados.style.display = "none";

                return;

            }


            tempoPesquisa = setTimeout(
                function () {

                    pesquisar(busca);

                },
                300
            );

        }
    );


    /* ==========================================
       PESQUISAR
    ========================================== */

    function pesquisar(busca) {

        fetch(
            BASE_URL +
            "buscar_produtos.php?q=" +
            encodeURIComponent(busca)
        )

        .then(function (resposta) {

            if (!resposta.ok) {

                throw new Error(
                    "Erro na pesquisa."
                );

            }

            return resposta.json();

        })

        .then(function (produtos) {

            resultados.innerHTML = "";


            /* NENHUM RESULTADO */

            if (
                !produtos ||
                produtos.length === 0
            ) {

                resultados.innerHTML = `

                    <div class="pesquisa-vazia">

                        Nenhum produto encontrado.

                    </div>

                `;

                resultados.style.display =
                    "block";

                return;

            }


            /* ==================================
               RESULTADOS
            ================================== */

            produtos.forEach(
                function (produto) {

                    const item =
                        document.createElement("a");


                    item.className =
                        "resultado-item";


                    item.href =
                        BASE_URL +
                        "produtos.php?busca=" +
                        encodeURIComponent(
                            produto.nome
                        );


                    let imagem =
                        produto.imagem;


                    if (
                        !imagem ||
                        imagem.trim() === ""
                    ) {

                        imagem =
                            BASE_URL +
                            "includes/img/logo.png";

                    }


                    if (
                        !imagem.startsWith("http") &&
                        !imagem.startsWith("/") &&
                        !imagem.startsWith(BASE_URL)
                    ) {

                        imagem =
                            BASE_URL +
                            "includes/img/" +
                            imagem;

                    }


                    item.innerHTML = `

                        <img
                            src="${imagem}"
                            alt="${escaparHTML(
                                produto.nome
                            )}"
                        >

                        <div class="resultado-info">

                            <strong>

                                ${escaparHTML(
                                    produto.nome
                                )}

                            </strong>

                            <span>

                                ${escaparHTML(
                                    produto.categoria
                                )}

                            </span>

                        </div>

                    `;


                    resultados.appendChild(item);

                }
            );


            resultados.style.display =
                "block";

        })

        .catch(function (erro) {

            console.error(
                "Erro:",
                erro
            );

        });

    }


    /* ==========================================
       ENTER
    ========================================== */

    campoPesquisa.addEventListener(
        "keydown",
        function (event) {

            if (event.key === "Enter") {

                event.preventDefault();


                const busca =
                    this.value.trim();


                if (busca !== "") {

                    window.location.href =
                        BASE_URL +
                        "produtos.php?busca=" +
                        encodeURIComponent(
                            busca
                        );

                }

            }

        }
    );


    /* ==========================================
       CLICAR FORA
    ========================================== */

    document.addEventListener(
        "click",
        function (event) {

            if (
                !event.target.closest(
                    ".barra-pesquisa"
                )
            ) {

                resultados.style.display =
                    "none";

            }

        }
    );


    /* ==========================================
       ESC
    ========================================== */

    campoPesquisa.addEventListener(
        "keydown",
        function (event) {

            if (event.key === "Escape") {

                resultados.style.display =
                    "none";

                campoPesquisa.blur();

            }

        }
    );


    /* ==========================================
       PROTEGER HTML
    ========================================== */

    function escaparHTML(texto) {

        if (
            texto === null ||
            texto === undefined
        ) {

            return "";

        }


        const div =
            document.createElement("div");


        div.textContent =
            String(texto);


        return div.innerHTML;

    }

});