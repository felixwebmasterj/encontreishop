$(document).ready(function() {
    // Função para obter o termo de busca da URL
    function getSearchTerm() {
        let urlParams = new URLSearchParams(window.location.search);
        return urlParams.get('search');      
    }
    let textResult = getSearchTerm();
    $('#resulttext').text("Resultados para a busca: " + textResult);



    // Função para carregar os itens do XML e filtrar com base no termo de busca
    function loadAndFilterItems(searchText) {
        let url = "data/dataindex.xml";

        $.ajax(url)
            .done(function(xml) {
                let results = []; // Array para armazenar os itens filtrados

                // Itera sobre os itens do XML
                $(xml).find("item").each(function() {
                    let title = $(this).find("title").text().toLowerCase();
                    // Se o título do item contiver o termo de busca, adiciona o item aos resultados
                    if (title.includes(searchText.toLowerCase())) {
                        results.push({
                            link: $(this).find("link").text(),
                            img: $(this).find("img").text(),
                            title: $(this).find("title").text(),
                            loja: $(this).find("loja").text()
                        });
                    }
                });

                // Exibe os resultados na tela
                displayResults(results);
            })
            .fail(function() {
                $("#resultado").html("<p>Ocorreu um erro ao carregar os resultados.</p>");
            });
    }

    // Função para exibir os resultados na tela
    function displayResults(results) {
        if (results.length === 0) {
            $("#resultado").html("<p>Nenhum resultado encontrado.</p>");
        } else {
            // Constrói o HTML para exibir os resultados na tela
            let html = "";
           results.forEach(function(item) {
                html += `
                    <a href="${item.link}" class="text-decoration-none itemSeachb" target="_blank">
                        <div class="row bg-light rounded mx-1 py-3 mt-1 shadow-sm">
                            <div class="col-5">
                                <img src="${item.img}" class="d-block w-100 border rounded"/>
                            </div>
                            <div class="col-7 ">
                                <span class="fs-6 itemSeach">${item.title}</span>
                                <div><img src="${item.loja}" width="60"></div>
                            </div>
                        </div>
                    </a>
                `;
            });
            // Exibe os itens na tela             
            $("#resultado").html(html);

        }
    }

    // Executa a pesquisa quando a página é carregada
    let searchTerm = getSearchTerm();
    if (searchTerm) {
        loadAndFilterItems(searchTerm);
    } else {
        $("#resultado").html("<p>Nenhum termo de busca especificado.</p>");
    }
});
 

$(document).ready(function() {
    $("#pesquisar").on("keypress", function(event) {
        if (event.which === 13) {
                $('#pesquisar-btn').trigger("click")
            }        
        }); 
    
    $("#pesquisar-btn").click(function() {
        let searchText = $("#pesquisar").val();
        // Redireciona o usuário para a página de resultados com o termo de busca como parâmetro
        window.location.href = "resultados.php?search=" + encodeURIComponent(searchText);
    });
});

