<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$telefone = $_POST['telefone'];
$salario = $_POST['salario'];

// Comando para atualizar (UPDATE)
$sql = "UPDATE colaboradores 
        SET nome='$nome', cargo='$cargo', telefone='$telefone', salario='$salario' 
        WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    echo "<script>
            alert('Dados atualizados com sucesso!');
            window.location.href = '../listar-colaboradores.php';
          </script>";
} else {
    echo "Erro ao atualizar: " . $conexao->error;
}

$conexao->close();
?>