const containerPedidos = document.querySelector('#pedidos');

const URLPedidos = 'http://localhost:8080/back/apiPedidos.php';

function carregarPedidos(){
    fetch(URLPedidos, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        },
        mode: 'cors'
    })
        .then(response => response.json())
        .then(pedidos => {
            containerPedidos.innerHTML = '';
            const options = {year: 'numeric', month: 'numeric', day: 'numeric'}

            for(let i = 0; i < pedidos.length; i++){
                const pedido = pedidos[i];
                console.log(pedido)
                const tr = document.createElement('tr');
                tr.innerHTML = `
                <td>${pedido.numero}</td>
                <td>${pedido.nome_cliente}</td>
                <td>R$${pedido.valor}</td>
                <td>${new Date(pedido.data_compra).toLocaleDateString(options)}</td>
                `;
                containerPedidos.appendChild(tr);
            }
        })
}

carregarPedidos();