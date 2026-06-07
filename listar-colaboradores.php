<?php
// Conecta ao banco de dados
include 'php/conexao.php';

// Busca todos os colaboradores
$sql = "SELECT * FROM colaboradores";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Colaboradores - Jacaré Mecânica</title>
    <link rel="stylesheet" href="css/teste.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="site-header" style="padding: 15px; background: #109951; text-align: center; color: white;">
        <h2>Jacaré Mecânica - Painel de Controle</h2>
        <a href="cadastro-colaboradores.html" class="btn btn-light mt-2 fw-bold">Voltar ao Cadastro de Colaborador</a>
    </header>

    <div class="container mt-5">
        <h2 class="main-title">Colaboradores Cadastrados</h2>
        <a href="cadastro-colaboradores.html" class="btn btn-success mb-3">+ Novo Colaborador</a>

        <table class="table table-striped table-bordered shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Preenche a tabela com os dados do banco
                if ($resultado->num_rows > 0) {
                    while($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["cargo"] . "</td>";
                        echo "<td>" . $row["telefone"] . "</td>";
                        echo "<td>
                                <a href='editar-colaborador.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Editar</a>
                                <a href='php/deletar_colaborador.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Tem certeza que deseja excluir?');\">Excluir</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Nenhum colaborador encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>