<?php
// 1. Conecta com o banco
include 'conecta.php';

// 2. Pega os dados do formulário
$nome_servico = $_POST['nome_servico'];
$descricao = $_POST['descricao'];
$preco_base = $_POST['preco_base'];
$tempo_estimado = $_POST['tempo_estimado'];
$placa = $_POST['placa'];


// 3. Prepara o SQL de inserção
$sql = "INSERT INTO servicos (nome_servico, descricao, preco_base, tempo_estimado, placa) 
        VALUES (:nome_servico, :descricao, :preco_base, :tempo_estimado, :placa)";

try {
    // 4. Executa a inserção com segurança
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':nome_servico', $nome_servico);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':preco_base', $preco_base);
    $stmt->bindParam(':tempo_estimado', $tempo_estimado);
    $stmt->bindParam(':placa', $placa);
    
    $stmt->execute();
    
    // 5. Redireciona de volta com mensagem de sucesso
    echo "<script>
            alert('Serviço adicionado ao catálogo com sucesso!');
            window.location.href='../index.html';
          </script>";

} catch(PDOException $e) {
    echo "Erro ao cadastrar serviço: " . $e->getMessage();
}
?>