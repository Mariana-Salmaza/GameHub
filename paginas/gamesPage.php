<?php

$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://gamehub-connect.000webhostapp.com/api/games.php/");
$fotosApi = file_get_contents("http://gamehub-connect.000webhostapp.com/api/galeriaFotos.php/");

$dadosApi = json_decode($dadosApi);
$fotos = json_decode($fotosApi);

$jogo = $dadosApi->$id;

$dados = $dadosJogos->$codigo;

?>


<div class="Container">
    <img src="<?= $jogo->banner ?>" alt="<?= $jogo->nome ?>" title="<?= $jogo->nome ?>" class="bannermeu">
    <h1 class="text-center fonte-titulo"><?= $jogo->nome ?></h1>

    <div class="row">
        <div class="col-12 col-md-3 aos-init aos-animate" data-aos="fade-left">
            <img class="imgcapa" src="<?= $jogo->poster ?>" class="w-100">
        </div>

        <div class="col-12 col-md-9 aos-init aos-animate" data-aos="fade-right">
            <p><?= $jogo->descricao ?></p>
        </div>

        <div class="container">
            <h3 class="text-center mt-4 fonte-titulo">Imagens do Jogo</h3>
            <div class="gallery-container">
                <?php
                $dadosFotos = file_get_contents("http://gamehub-connect.000webhostapp.com/api/galeriaFotos.php/");
                $dadosFotos = json_decode($dadosFotos);

                $dados = $dadosFotos->$codigo;


                $i = 1;
                foreach ($dados as $foto) {
                ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item">
                        <a href="<?= $foto->foto ?>" title="Foto <?= $i ?>" data-fslightbox>
                            <img src="<?= $foto->foto ?>" alt="Foto <?= $i ?>" class="w-100">
                        </a>
                    </div>
                <?php
                    $i++;
                }
                ?>

            </div>
        </div>

        <section id="meu-game">
            <h3 class="game fonte-titulo">Jogue Agora</h3>
            <iframe width="100%" height="600vh" src="<?= $jogo->jogo ?>"></iframe>

            <p class="text-center">
                <a href="<?= $jogo->jogo ?>" class="btn btn-custom" target="_blank"><br>Abrir em outra aba<br><br></a>
            </p>


        </section>

    </div>
</div>