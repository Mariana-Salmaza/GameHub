<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GameHub</title>
	<meta name="description" content="Seu site de Jogos, com lançamentos e jogos gratuitos">
	<meta name="keywords" content="Games, Jogos, Lançamentos">

	<base href="http://localhost/GameHub/">


	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="styles/style.css">

    <link rel="shortcut icon" href="./imagens/icone.png">

</head>






<body>

<?php
$url = "http://localhost/GameHub/api/games.php";

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
						<a class="nav-link" href="equipe">Equipe</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="suporte">Suporte</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="home" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Games
						</a>
						<ul class="dropdown-menu">
						<?php
        foreach ($dadosBanner as $dados) {
        ?>
							<li><a class="dropdown-item" href="gamesPage/<?=$dados->id?>"><?= $dados->nome ?></a></li>



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

    if (isset($_GET["param"])) {
      $param = $_GET["param"];
      $p = explode("/", $param);
    }

    $page = $p[0] ?? "home";
    $jogo = $p[1] ?? NULL;

    if ($page == "jogo") {
      $pagina = "jogo/{$jogo}.php";

    } else {
      $pagina = "paginas/{$page}.php";
    }

    if (file_exists($pagina)) {
      include $pagina;
    } else {
      include "paginas/erro.php";
    }

    ?>
	</main>

	<footer id="contato" class="footer">
		<p>Desenvolvido por Mariana Salmaza ©2024 </p>
	</footer>
	<a href="https://web.whatsapp.com/" title="Whatsapp" class="whatsapp">
		<img src="imagens/whatsapp.png" alt="whatsapp">
	</a>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/fslightbox.js"></script>
	<script>
        AOS.init();
    </script>

</body>

</html>