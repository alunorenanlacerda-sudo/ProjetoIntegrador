<!doctype html>
<html>
<head>
	<title>Jacaré Mecânica e Auto Peças</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta lang="pt-br">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="..\css/teste.css">

</head>
<body>
	<header class="site-header">
        <div class="header-inner">
            <a class="brand" href="..\index.html" aria-label="Jacaré Mecânica e Auto Peças — Página Inicial">
            <img src="..\img/logo2.png" alt="Logotipo Jacaré" class="brand-logo">
            </a>

            <div class="header-center">
                <span class="tagline">Peças de qualidade, serviço de confiança</span>
            </div>

            <nav class="main-nav" role="navigation" aria-label="Menu principal">
                <a href="..\nossos-servicos.html">Nossos Serviços</a>
                <a href="..\pecas.html">Nossa loja de Peças</a>
                <a href="..\sobre-nos.html">Sobre Nós</a>
                <a href="..\Contato.html">Contato</a>
                <a href="login.php">Login</a>
            </nav>
        </div>
        
    </header>
    <div class="form_container">
		<h1>Entrar</h1>
		<form method="POST" action="processa_login.php">
			<input type="email" name="email" placeholder="E-mail" required>
            <br><br>
			<input type="password" name="senha" placeholder="Senha" required>
			<button type="submit">Entrar</button>
		</form>
	</div>
</body>
</html>