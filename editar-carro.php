<?php
include 'php/conexao.php';
$id = $_GET['id'];
$resultado = $conexao->query("SELECT * FROM carros WHERE id = $id");
$carro = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f4f4;">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h3 class="mb-4">Editar Carro: <?php echo $carro['modelo']; ?> (<?php echo $carro['placa']; ?>)</h3>
            <form action="php/atualizar_carro.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $carro['id']; ?>">
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Modelo:</label>
                        <input type="text" class="form-control" name="modelo" value="<?php echo $carro['modelo']; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Marca:</label>
                        <input type="text" class="form-control" name="marca" value="<?php echo $carro['marca']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Placa:</label>
                        <input type="text" class="form-control" name="placa" value="<?php echo $carro['placa']; ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Cor:</label>
                        <input type="text" class="form-control" name="cor" value="<?php echo $carro['cor']; ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Ano:</label>
                        <input type="number" class="form-control" name="ano" value="<?php echo $carro['ano']; ?>">
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="listar-carros.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>