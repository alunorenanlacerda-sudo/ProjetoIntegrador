<?php
// 1. Chama o arquivo que faz a conexão com o banco de dados
include 'conecta.php';

// 2. Recebe os dados que vieram do formulário HTML (usando os 'names')
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

// 3. Prepara o comando SQL de inserção
// Usamos :variavel por segurança, para evitar ataques de hackers (SQL Injection)
$sql = "INSERT INTO clientes (nome, telefone, email, cpf) VALUES (:nome, :telefone, :email, :cpf)";

try {
    // 4. Prepara e executa a operação no banco de dados
    $stmt = $pdo->prepare($sql);
    //stmt é usado para "amarrar" os valores que vieram do formulário com os :variavel do SQL
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cpf', $cpf);
    
    $stmt->execute();
    
    // 5. Se der certo, avisa o usuário e volta para a página de cadastro
    // 5. Se der certo, avisa o usuário e volta para a página inicial
    echo "<script>
            alert('Cliente cadastrado com sucesso!');
            window.location.href='../index.html'; 
          </script>";

} catch(PDOException $e) {
    // 6. Se der erro, mostra qual foi o erro
    echo "Erro ao cadastrar: " . $e->getMessage();
}
?>