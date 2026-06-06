<?php
include 'conexao.php';

if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $conn->query("INSERT INTO servicos(nome,descricao)
                  VALUES('$nome','$descricao')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastrar Serviço</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="card">
        <h2>Cadastrar Serviço</h2>

        <form method="POST">

            <input type="text"
                   name="nome"
                   placeholder="Nome do Serviço"
                   required>

            <textarea name="descricao"
                      placeholder="Descrição"
                      required></textarea>

            <button type="submit" name="salvar">
                Salvar
            </button>

        </form>

        <br>

        <a href="index.php">Voltar</a>

    </div>

</div>

</body>
</html>