<?php
include 'conecta.php';
//include conecta.php para ter acesso ao $pdo, que é a conexão com o banco de dados

// 1. Recebemos o CPF digitado na tela e os dados do carro
$cpf_digitado = $_POST['cpf_dono'];
$placa = $_POST['placa'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$cor = $_POST['cor'];
$observacoes = $_POST['observacoes'];

try {
    // 2. BUSCA DO ID: Vamos procurar o cliente que tem esse CPF
    $sql_busca_cliente = "SELECT id FROM clientes WHERE cpf = :cpf";
    $stmt_busca = $pdo->prepare($sql_busca_cliente);
    $stmt_busca->bindParam(':cpf', $cpf_digitado);
    $stmt_busca->execute();
    
    $cliente_encontrado = $stmt_busca->fetch(PDO::FETCH_ASSOC);

    // 3. Verifica se o cliente realmente existe no sistema
    if ($cliente_encontrado) {
        
        // Pegamos o ID verdadeiro que estava escondido no banco
        $id_cliente_verdadeiro = $cliente_encontrado['id'];

        // 4. Agora sim, salvamos o carro usando o ID correto!
        $sql_carro = "INSERT INTO carros (id_cliente, placa, marca, modelo, ano, cor, observacoes) 
                      VALUES (:id_cliente, :placa, :marca, :modelo, :ano, :cor, :observacoes)";
        
        $stmt_carro = $pdo->prepare($sql_carro);
        $stmt_carro->bindParam(':id_cliente', $id_cliente_verdadeiro);
        $stmt_carro->bindParam(':placa', $placa);
        $stmt_carro->bindParam(':marca', $marca);
        $stmt_carro->bindParam(':modelo', $modelo);
        $stmt_carro->bindParam(':ano', $ano);
        $stmt_carro->bindParam(':cor', $cor);
        $stmt_carro->bindParam(':observacoes', $observacoes);
        
        $stmt_carro->execute();
        
        echo "<script>
                alert('Veículo cadastrado e vinculado ao cliente com sucesso!');
                window.location.href='../index.html';
              </script>";

    } else {
        // Se o cara digitar um CPF que não foi cadastrado antes
        echo "<script>
                alert('Erro: Nenhum cliente encontrado com este CPF. Cadastre o cliente primeiro.');
                window.history.back(); // Volta para a tela anterior
              </script>";
    }

} catch(PDOException $e) {
    echo "Erro no sistema: " . $e->getMessage();
}
?>