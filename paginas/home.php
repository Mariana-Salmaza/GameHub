<?php
$url = "http://localhost/GameHub/api/games.php";

$dadosJson = file_get_contents($url);

$dadosBanner = json_decode($dadosJson);


foreach ($dadosBanner as $dados) {

}
?>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
                <a href="">
                    <img src="http://localhost/GameHub/imagens/bannerjogoD.png" class="d-block w-100" alt="">
                </a>
            </div>
        <?php
        foreach ($dadosBanner as $dados) {
        ?>
            <div class="carousel-item">
                <a href="gamesPage/<?= $dados->id ?>">
                    <img src="<?= $dados->banner ?>" class="d-block w-100" alt="<?= $dados->nome ?>">
                </a>
            </div>
        <?php
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
        <div class="col-12 col-md-4 mt-3">
            <div class="card" data-aos="fade-up" data-aos-delay="50">
                <img src="imagens/foto1.png" alt="Enemy War 76" class="card-img-top" loading="lazy">
                <div class="card-body text-center-strong">
                    <p><strong>Enemy War</strong></p>
                    <p>
                        <a href="gamesPage/<?= $dados->id ?>" title="Detalhes" class="btn btn-info">
                            Detalhes
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <div class="card" data-aos="fade-up" data-aos-delay="50">
                <img src="imagens/bannerjogoD.png" alt="" class="card-img-top" loading="lazy">
                <div class="card-body text-center-strong">
                    <p><strong>Space Soldier Survival</strong></p>
                    <p>
                        <a href="gamesPage/<?= $dados->id ?>" title="Detalhes" class="btn btn-info">
                            Detalhes
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <div class="card" data-aos="fade-up" data-aos-delay="50">
                <img src="imagens/fotoGameJ2.jpeg" alt="Parabellum" class="card-img-top" loading="lazy">
                <div class="card-body text-center-strong">
                    <p><strong>Parabellum</strong></p>
                    <p>
                        <a href="#" title="Detalhes" class="btn btn-info">
                            Detalhes
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <div class="card" data-aos="fade-up" data-aos-delay="50">
                <img src="imagens/fotojogoLuiz1.jpeg" alt="" class="card-img-top" loading="lazy">
                <div class="card-body text-center-strong">
                    <p><strong>FC 2024</strong></p>
                    <p>
                        <a href="#" title="Detalhes" class="btn btn-info">
                            Detalhes
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <div class="card" data-aos="fade-up" data-aos-delay="50">
                <img src="imagens/bo6.jpg" alt="Tekken 8" class="card-img-top" loading="lazy">
                <div class="card-body text-center-strong">
                    <p><strong>Tekken 8</strong></p>
                    <p>
                        <a href="#" title="Detalhes" class="btn btn-info">
                            Detalhes
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <div class="card" data-aos="fade-up" data-aos-delay="50">
                <img src="imagens/fotojogoLuiz1.jpeg" alt="" class="card-img-top" loading="lazy">
                <div class="card-body text-center-strong">
                    <p><strong>FC 2024</strong></p>
                    <p>
                        <a href="#" title="Detalhes" class="btn btn-info">
                            Detalhes
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>