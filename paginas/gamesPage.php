<?php

$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://localhost/GameHub/api/games.php/");

$dadosApi = json_decode($dadosApi);

$jogo = $dadosApi->$id;

?>

<div class="Container">
    <img src="<?=$jogo->banner?>" alt="Enemy War" title="Enemy War" class="bannermeu">
    <h1 class="text-center"><?=$jogo->nome?></h1>

    <div class="row">
        <div class="col-12 col-md-3 aos-init aos-animate" data-aos="fade-left">
            <img class="imgcapa" src="imagens/capa.png" class="w-100">
        </div>

        <div class="col-12 col-md-7 aos-init aos-animate" data-aos="fade-right">
            <p>
                O jogo "Enemy War" é uma emocionante experiência de guerra, projetada para um jogador em uma única fase desafiadora.
                No papel do herói solitário, você enfrentará não apenas dois inimigos comuns, mas também um chefe supremamente poderoso que lidera as forças adversárias.
                Sua missão é superar obstáculos mortais, derrotando cada um dos três inimigos que cruzarem seu caminho.
            </p>
            <p>
                Cada encontro requer habilidade e estratégia para evitar ser derrotado, pois qualquer contato custa valiosas vidas.
                Além disso, uma chave escondida será crucial para desbloquear um baú contendo uma bomba devastadora. Esta bomba é sua única esperança contra o formidável chefe, cuja derrota garantirá a vitória final.
                Em "Enemy War", sua atenção é fundamental.
            </p>
            <p>
                Manter-se focado é essencial para evitar o reinício da fase ao perder suas três vidas. Cada decisão conta enquanto você navega por um campo de batalha repleto de perigos e desafios implacáveis.
                Prepare-se para uma experiência intensa de combate e estratégia, onde cada movimento pode significar a diferença entre a glória e a derrota.
            </p>
        </div>


        <style>
        .gallery-item {
            margin-bottom: 30px;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.2s;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
    </style>

        <div class="container">
        <h1 class="text-center mt-4">Galeria de Fotos</h1>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item">
                <img src="imagens/foto1.png" alt="Foto 1">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item">
                <img src="imagens/foto2.png" alt="Foto 2">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item">
                <img src="imagens/foto3.png" alt="Foto 3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item">
                <img src="imagens/foto4.png" alt="Foto 4">
            </div>
            <!-- Adicione mais fotos conforme necessário -->
        </div>
    </div>
    </div>