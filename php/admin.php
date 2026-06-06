<?php

require 'security.php';

echo "usuário logado";

?>
<!doctype html>
<html>
<header>
	<title>Login</title>
	<meta lang="pt-br">
    <meta charset="UTF-8">
	<!--link rel="stylesheet" href="css/estilo.css" -->
</header>
<body>
	<a href="logout.php">Sair</a>
	<nav>
		<ul>
			<li><a href="cliente/listar.php">Clientes</a></li>
			<li><a href="produto/listar.php">Produtos</a></li>
			<li><a href="venda/listar.php">Vendas</a></li>
			<li><a href="cliente/listar.php">Clientes</a></li>
			
		</ul>
</body>
</html>