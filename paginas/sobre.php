<?php
// URL da API da equipe
$url = "http://localhost/GameHub/api/equipe.php";

// Obter os dados JSON da API
$dadosJson = file_get_contents($url);

// Decodificar o JSON para um array PHP
$dadosEquipe = json_decode($dadosJson, true);
?>

<section class="who-we-are">
    <h2>SOBRE O GAMEHUB</h2>
    <div class="custom-card">
        <div class="custom-card-body">
            <p class="fonte-diferente">
                No GameHub, oferecemos uma experiência de jogo incomparável para entusiastas de todas as idades e preferências.
                Seja você um veterano dos jogos ou um novato buscando se aventurar neste universo fascinante, o GameHub é o seu destino ideal.
                Aqui, você encontrará uma vasta biblioteca de jogos, desde emocionantes jogos de ação e desafiadores jogos de estratégia, até envolventes RPGs e relaxantes jogos casuais.
            </p>
        </div>
    </div>
</section>


<h2>A NOSSA EQUIPE</h2>
<div class="team row">
    <?php
    if (!empty($dadosEquipe)) {
        foreach ($dadosEquipe as $membro) {
    ?>
            <div class="col-12 col-md-3 text-center d-flex align-items-stretch">
                <div class="card custom-photo-card" data-aos="fade-up" data-aos-delay="50">
                    <img src="<?= htmlspecialchars($membro['foto'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($membro['nome'], ENT_QUOTES, 'UTF-8') ?>" class="card-img-top img-fluid" loading="lazy" style="object-fit: cover; height: 200px;">
                    <div class="card-body text-center-color">
                        <p><strong><?= htmlspecialchars($membro['nome'], ENT_QUOTES, 'UTF-8') ?></strong></p>
                        <p><?= htmlspecialchars($membro['cargo'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>