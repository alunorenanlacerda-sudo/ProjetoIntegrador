<?php
include 'php/conexao.php';
$id = $_GET['id'];
$resultado = $conexao->query("SELECT * FROM clientes WHERE id = $id");
$cliente = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f4f4;">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h3 class="mb-4">Editar Cliente: <?php echo $cliente['nome']; ?></h3>
            <form action="php/atualizar_cliente.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
                
                <div class="mb-3">
                    <label>Nome Completo:</label>
                    <input type="text" class="form-control" name="nome" value="<?php echo $cliente['nome']; ?>" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>CPF:</label>
                        <input type="text" class="form-control" name="cpf" value="<?php echo $cliente['cpf']; ?>" readonly>
                        <small class="text-muted">O CPF não pode ser alterado.</small>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Telefone:</label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $cliente['telefone']; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $cliente['email']; ?>">
                </div>

                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="listar-clientes.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>