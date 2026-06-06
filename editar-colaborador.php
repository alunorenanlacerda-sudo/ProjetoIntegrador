<?php
include 'php/conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM colaboradores WHERE id = $id";
$resultado = $conexao->query($sql);
$colaborador = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Colaborador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f4f4;">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h3 class="mb-4">Editar Colaborador: <?php echo $colaborador['nome']; ?></h3>
            
            <form action="php/atualizar_colaborador.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $colaborador['id']; ?>">
                
                <div class="mb-3">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome" value="<?php echo $colaborador['nome']; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label>Cargo:</label>
                    <input type="text" class="form-control" name="cargo" value="<?php echo $colaborador['cargo']; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label>Telefone:</label>
                    <input type="text" class="form-control" name="telefone" value="<?php echo $colaborador['telefone']; ?>" required>
                </div>

                <div class="mb-3">
                    <label>Salário:</label>
                    <input type="number" step="0.01" class="form-control" name="salario" value="<?php echo $colaborador['salario']; ?>">
                </div>

                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="listar-colaboradores.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>