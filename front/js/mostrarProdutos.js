const botaoProdutos = document.querySelector('#botao_produtos');

botaoProdutos.addEventListener('click', function (event) {
    event.preventDefault();
    console.log('abrido');
    const url = 'https://makeup-api.herokuapp.com/api/v1/products.json';
    const listaProdutos = document.querySelector('#produtos');

    fetch(url)

        .then(response => response.json())

        .then(data => {
            function mostrarPagina() {

                event.preventDefault();

                for (let i = 0; i <= data.length; i++) {
                    let produto = data[i];
                    let card = document.createElement('div');
                    card.classList.add('col');
                    card.classList.add('produto');
                    card.innerHTML = `
                <div class="card p-2 bg-info-subtle h-100">
                    <div class="card-body">
                        <h5 class="card-title produto-nome">${produto.name}</h5>
                        <ul class="list-group bg-light-subtle">
                            <li class="list-group-item">Preço: R$${produto.price}</li>
                            <li class="list-group-item">Categoria: ${produto.category}</li>
                        </ul>
                    </div>
    
                    <div class="card-footer">
                        <div class="form-check" >
                            <input class="form-check-input" type="checkbox" onclick="inserirCarrinho(${produto.price}, '#inserir_carrinho${i}')" id="inserir_carrinho${i}">
                            <label class="form-check-label" for="inserir_carrinho${i}">
                            Colocar produto no carrinho
                            </label>
                        </div>
                    </div>
                </div>
                `;
                    listaProdutos.appendChild(card);
                }
            }
            mostrarPagina();



        }) /**se ocorrer um erro durante a solicitação fetch(), esse erro será
        * capturado por .catch() e o erro será impresso no console
        **/

        .catch(error => console.error(error))
})
