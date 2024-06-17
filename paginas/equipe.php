<?php
// URL da API da equipe
$url = "http://localhost/GameHub/api/equipe.php";

// Obter os dados JSON da API
$dadosJson = file_get_contents($url);

// Decodificar o JSON para um array PHP
$dadosEquipe = json_decode($dadosJson, true);
?>



<h2>A nossa equipe</h2>

<div class="row">
    <?php
    if (!empty($dadosEquipe)) {
        foreach ($dadosEquipe as $membro) {
    ?>
            <div class="col-12 col-md-3 text-center">
                <div class="card" data-aos="fade-up" data-aos-delay="50">
                    <img src="<?= htmlspecialchars($membro['foto'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($membro['nome'], ENT_QUOTES, 'UTF-8') ?>" class="card-img-top" loading="lazy">
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

<section class="who-we-are">
  <h2>Sobre o GameHub</h2>
  <p class="fonte-diferente">
    O GameHub é o seu destino definitivo para todos os tipos de jogos, oferecendo uma experiência completa e imersiva para jogadores de todas as idades e preferências. Se você é um fã de jogos de ação, aventura, estratégia, RPG, ou simplesmente adora jogos casuais para relaxar, o GameHub tem algo especial para você.
  </p>
</section>