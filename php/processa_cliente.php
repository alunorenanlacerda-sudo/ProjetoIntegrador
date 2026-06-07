<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'] ?? NULL;
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];

$sql = "INSERT INTO clientes (nome, cpf, data_nascimento, telefone, email, cep, rua, numero, bairro) 
        VALUES ('$nome', '$cpf', '$data_nascimento', '$telefone', '$email', '$cep', '$rua', '$numero', '$bairro')";

if ($conexao->query($sql) === TRUE) {
    echo "<script>
            alert('Cliente cadastrado com sucesso!');
            window.location.href = '../listar-clientes.php';
          </script>";
} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}

$conexao->close();
?>