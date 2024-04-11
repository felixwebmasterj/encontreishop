let url = "data/dataindex.xml";
let itemsLoaded = 0;

// Função para carregar os itens do XML
function loadItems() {
    $.ajax(url)
        .done(function(xml) {
            $("#loading").hide(); 
            $(xml).find("item").each(function(index) {
                if (index >= itemsLoaded && index < itemsLoaded + 2) {
                    // Cria os elementos com efeito de fade in
                    let newItem = $(`
                        <a href="${$(this).find("link").text()}" class="text-decoration-none itemSeachb" target="_blank" style="display: none;">
                            <div class="row bg-light rounded mx-1 py-3 mt-1 shadow-sm">
                                <div class="col-5">
                                    <img src="${$(this).find("img").text()}" class="d-block w-100 border rounded"/>
                                </div>
                                <div class="col-7 ">
                                    <span class="fs-6 itemSeach">${$(this).find("title").text()}</span>
                                    <div><img src="${$(this).find("loja").text()}" width="60"></div>
                                </div>
                            </div>
                        </a>
                    `);
                    $("#mainpg").append(newItem);
                    newItem.fadeIn(800); // Aplica o efeito de fade in
                }
            });
            itemsLoaded += 2; // Atualiza a quantidade de itens carregados
        })
        .fail(function() {
            alert("Por favor, tente novamente!");
        });
}

// Chama a função para carregar os primeiros itens
loadItems();

// Evento de scroll para carregar mais itens quando o usuário estiver próximo do final da página
$(window).scroll(function() {
    if ($(window).scrollTop() + $(window).height() + 5 > $(document).height()) {
        loadItems(); // Carrega mais itens
    }
});




