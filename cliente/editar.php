<?php include 'conexao.php';
$id=$_GET['id'];
if(isset($_POST['atualizar'])){
$conn->query("UPDATE servicos SET nome='".$_POST['nome']."', descricao='".$_POST['descricao']."' WHERE id=$id");
header('Location:listar.php');
}
$d=$conn->query("SELECT * FROM servicos WHERE id=$id")->fetch_assoc();
?>
<form method='POST'>
<input name='nome' value='<?php echo $d['nome']; ?>'><br>
<textarea name='descricao'><?php echo $d['descricao']; ?></textarea><br>
<button name='atualizar'>Atualizar</button>
</form>