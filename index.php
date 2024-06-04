<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GameHub</title>
	<meta name="description" content="Site de jogos">
	<meta name="keywords" content="Jogos, Lançamentos">

	<link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="./imagens/icone.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



</head>

<body>
	<header class="header">
		<a href="index.php" title="GameHub" class="header-logoFlex">
			<img class="header-logo" src="imagens/logo3.png" alt="GameHub" title="GameHub">
		</a>
		<a href="#" id="botao">
			<i class="fa-solid fa-bars"></i>
		</a>

		<nav class="header-menu mobile-menu" id="mobileMenu">
			<ul>
				<li>
					<a href="index.php?pagina=home">
						Home
					</a>
				</li>
				<li>
					<a href="index.php?pagina=sobre">
						Sobre
					</a>
				</li>
				<li>
					<a href="#contato">
						Contato
					</a>
				</li>
				<li>
					<a href="index.php?pagina=games">
						Games
					</a>
				</li>
			</ul>
		</nav>
	</header>

	<main>
		<?php
			//imprimir o conteudo do array do GET
            //print_r($_GET);

            //recuperar a variavel pagina
            $pagina = $_GET["pagina"] ?? "home";

            // paginas/home.php
            $pagina = "paginas/{$pagina}.php";

			
            // verificar se o arquivo existe
            if (file_exists($pagina)) {
                include $pagina;
			}

		?>

	</main>

	<footer id="contato" class="footer">
		<p>Desenvolvido por Mariana Salmaza ©2024 </p>
	</footer>
	<a href="https://web.whatsapp.com/" title="whatsapp" class="whatsapp">
		<img src="imagens/whatsapp.png" alt="whatsapp" width="25" height="25"> 
	</a>

</body>

</html>