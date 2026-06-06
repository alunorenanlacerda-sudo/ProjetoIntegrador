<?php
// Chama o arquivo de conexão que criamos no Passo 4
include 'conexao.php';

// Recebe as informações digitadas no formulário pelo método POST
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$dataNascimento = $_POST['dataNascimento'];
$cargo = $_POST['cargo'];
$dataAdmissao = $_POST['dataAdmissao'];
$salario = $_POST['salario'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// Prepara o comando SQL para inserir os dados no banco
$sql = "INSERT INTO colaboradores (nome, cpf, data_nascimento, cargo, data_admissao, salario, telefone, email) 
        VALUES ('$nome', '$cpf', '$dataNascimento', '$cargo', '$dataAdmissao', '$salario', '$telefone', '$email')";

// Executa o comando e verifica se deu certo
if ($conexao->query($sql) === TRUE) {
    echo "<script>
            alert('Colaborador cadastrado com sucesso!');
            window.location.href = '../cadastro-colaboradores.html';
          </script>";
} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}

// Fecha a conexão
$conexao->close();
?>