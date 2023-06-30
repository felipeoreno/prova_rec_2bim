<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    // GET recebe/pega informações
    // POST envia informações
    // PUT edita informações: "update"
    // DELETE deleta informações
    // OPTIONS é a relação de métodos disponíveis para uso
    header('Access-Control-Allow-Headers: Content-Type');

    if($_SERVER['REQUEST_METHOD'] === 'OPTIONS'){
        exit;
    } else{

    }

    include 'conexao.php';

    // rota para obter os pedidos
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $stmt = $conn->prepare("SELECT * FROM pedidos");
        $stmt->execute();

        $pedidos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo(json_encode($pedidos));
    }

    // rota para criar pedidos
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome_cliente = $_POST['nome_cliente'];
        $valor = $_POST['valor'];
        $data_compra = $_POST['data_compra'];

        $stmt = $conn->prepare("INSERT INTO pedidos (nome_cliente, valor, data_compra) VALUES (:nome_cliente, :valor, :data_compra);");
        $stmt->bindParam(':nome_cliente', $nome_cliente);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':data_compra', $data_compra);
    }
?>