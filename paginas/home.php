<?php
// URL da API para obter os dados dos jogos
$apiGames = "http://localhost/GameHub/api/games.php";
$apiBanner = "http://localhost/GameHub/api/banner.php";

// Obtém o conteúdo JSON da URL
$jsonGames = file_get_contents($apiGames);
$JsonBanner = file_get_contents($apiBanner);

// Decodifica o JSON em um array de objetos PHP
$dadosGames = json_decode($jsonGames);
$dadosBanner = json_decode($JsonBanner);
?>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="gamesPage/1">
                <img src="http://localhost/GameHub/imagens/bannerMeu.png " class="d-block w-100" alt="Enemy War">
            </a>
        </div>

        <?php
        foreach ($dadosBanner as $dados) {
            if ($dados->id_game != 1) {
        ?>
                <div class="carousel-item">
                    <a href="gamesPage/<?= $dados->id_game ?>">
                        <img src="<?= $dados->imagem ?>" class="d-block w-100" alt="<?= $dados->nome ?>">
                    </a>
                </div>
        <?php
            }
        }
        ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="container">
    <h1 class="text-center">Lançamentos:</h1>
    <div class="row">

        <?php
        foreach ($dadosGames as $dados) {

        ?>
            <div class="col-12 col-md-4 mt-3">
                <div class="card" data-aos="fade-up" data-aos-delay="50">
                    <img src="<?= $dados->capa ?>" alt="<?= $dados->nome ?>" class="card-img-top" loading="lazy">
                    <div class="card-body text-center-strong">
                        <p><strong><?= $dados->nome ?></strong></p>
                        <p>
                            <a href="gamesPage/<?= $dados->id ?>" title="Detalhes" class="btn btn-info me-5">
                                <i class="fas fa-search"></i> Detalhes
                            </a>
                            <a href="<?= $dados->jogo ?>" title="Jogar" class="btn btn-info">
                                <i class="bi bi-controller"></i> Jogar
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>