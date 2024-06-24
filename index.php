<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GameHub</title>
	<meta name="description" content="Seu site de Jogos, com lançamentos e jogos gratuitos">
	<meta name="keywords" content="Games, Jogos, Lançamentos">

	<base href="https://gamehub-connect.000webhostapp.com/">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="styles/style.css">

	<link rel="shortcut icon" href="./imagens/icone.png">

</head>



<body>

	<?php
	$url = "https://gamehub-connect.000webhostapp.com/api/games.php";

	$dadosJson = file_get_contents($url);

	$dadosBanner = json_decode($dadosJson);

	foreach ($dadosBanner as $dados) {
	}
	?>


	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">
				<img src="imagens/logo3.png" alt="GameHub" title="GameHub">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="sobre">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#suporte">Suporte</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="formulario">Formulário</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="home" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Games
						</a>
						<ul class="dropdown-menu">
							<?php
							foreach ($dadosBanner as $dados) {
							?>
								<li><a class="dropdown-item" href="gamesPage/<?= $dados->id ?>"><?= $dados->nome ?></a></li>



							<?php
							}
							?>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<main>
		<?php
		// Defina o valor padrão para a página
		$pagina = "home";
		$codigo = null;

		// Verifique se o parâmetro "pagina" está presente na URL
		if (isset($_GET["pagina"])) {
			// Quebre o parâmetro "pagina" em partes
			$p = explode("/", $_GET["pagina"]);
			$pagina = $p[0] ?? "home"; // Atribua o primeiro valor à variável $pagina
			$codigo = $p[1] ?? null;   // Atribua o segundo valor à variável $codigo, se existir
		}

		// Determine o caminho do arquivo com base na página
		if ($pagina == "jogo" && $codigo) {
			$caminho = "jogo/{$codigo}.php";
		} else {
			$caminho = "paginas/{$pagina}.php";
		}

		// Inclua o arquivo se ele existir, caso contrário, inclua a página de erro
		if (file_exists($caminho)) {
			include $caminho;
		} else {
			include "paginas/erro.php";
		}
		?>
	</main>


	<footer>
		<div id="suporte" class="footerContainer">
			<div class="socialIcons">
				<a href="https://www.instagram.com/mari_salmaza?igsh=YXlub3JieHlhMmJq" target="_blank"><i class="fa-brands fa-instagram" title="Instagram"></i></a>
				<a href="https://wa.me/44988021644" target="_blank"><i class="fa-brands fa-whatsapp" title="WhatsApp"></i></a>
				<a href="https://github.com/Mariana-Salmaza" target="_blank"><i class="fa-brands fa-github" title="GitHub"></i></a>
				<a href="mailto:mariana.salmaza@grupointegrado.br" target="_blank"><i class="fas fa-envelope" title="E-mail"></i></a>
			</div>


			<div class="footerBottom">
				<p>Copyright &copy;2024; Designed by <span class="designer">Mariana Salmaza</span></p>
			</div>
		</div>
	</footer>



	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/fslightbox.js"></script>
	<script>
		AOS.init();
	</script>

</body>

</html>