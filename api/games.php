<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://gamehub-connect.000webhostapp.com/imagens/";

    $games[1] = array("id"=>1, "nome"=>"Enemy War", "descricao"=>"<p>O jogo Enemy War é uma emocionante experiência de guerra, projetada para um jogador em uma única fase desafiadora.
    No papel do herói solitário, você enfrentará não apenas dois inimigos comuns, mas também um chefe supremamente poderoso que lidera as forças adversárias.
    Sua missão é superar obstáculos mortais, derrotando cada um dos três inimigos que cruzarem seu caminho.</p> <p>Cada encontro requer habilidade e estratégia para evitar ser derrotado, pois qualquer contato custa valiosas vidas.
    Além disso, uma chave escondida será crucial para desbloquear um baú contendo uma bomba devastadora. Esta bomba é sua única esperança contra o formidável chefe, cuja derrota garantirá a vitória final.
    Em Enemy War, sua atenção é fundamental.</p> <p>Manter-se focado é essencial para evitar o reinício da fase ao perder suas três vidas. Cada decisão conta enquanto você navega por um campo de batalha repleto de perigos e desafios implacáveis.
    Prepare-se para uma experiência intensa de combate e estratégia, onde cada movimento pode significar a diferença entre a glória e a derrota.</p>",
    "poster"=>"{$path}capa.png","banner"=>"{$path}bannerMeu.png", "capa"=>"{$path}1.png","jogo"=>"http://gamehub-connect.000webhostapp.com/games/EnemyWar/index.html");

    $games[2] = array("id"=>2, "nome"=>"Space Soldier Survial", "descricao"=>"<p>Space Soldier Surivival é um jogo de plataforma 2D cujo objetivo é a sobrevivência do nosso personagem, o Soldado Espacial. Após um pouso forçado em um planeta desconhecido ele terá que enfrentar alguns inimigos e outros obstaculos para conseguir seguir em frente com sua jornada. 
	O jogo contem uma mecanica e um mapa muito simples mas é capaz de divertir e desafiar o jogador.</p>",
    "poster"=>"{$path}posterDiego.png","banner"=>"{$path}bannerjogo1D.png", "capa"=>"{$path}bannerjogoD.png","jogo"=>"http://gamehub-connect.000webhostapp.com/games/SpaceSoldierSurvival_Diego/index.html");

    $games[3] = array("id"=>3, "nome"=>"Parabellum", "descricao"=>"<p>Você presencia Alexander Springovisk em ação através de câmeras de segurança, ele é um agente altamente habilidoso e capacitado para resolver qualquer missão que caia em sua responsabilidade. Seu personagem é um agente especial de missões extra-officiais, extremamente eficiente em seus metodos, e seu lema é missão dada é missão cumprida.</p>",
    "poster"=>"{$path}posterJulio.png","banner"=>"{$path}BannerParabellum.png", "capa"=>"{$path}fotoGameJ2.jpeg","jogo"=>"http://gamehub-connect.000webhostapp.com/games/Parabellum_Julio/index.html");

    $games[4] = array("id"=>4, "nome"=>"LeMinotaur", "descricao"=>"<p>Você é um Minotauro tentando escapar do seu labirinto de plataformas. De o seu melhor!!
    Um rei prendeu timóteo, e encheu seu caminho de armadilhas, no entanto existe uma chance de escapar. 
    Pule por obtáculos e derrote inimigos, e talvez você conseguirá salvar timóteo.</p>",
    "poster"=>"{$path}posterLuiz.png","banner"=>"{$path}fotojogoLuiz2.png", "capa"=>"{$path}fotojogoLuiz2.jpeg","jogo"=>"http://gamehub-connect.000webhostapp.com/games/LeMinotaur_Luiz/index.html");

    
    $games[5] = array("id"=>5, "nome"=>"Takslab", "descricao"=>"<p>Você se encontra em um vasto labirinto interminável repleto de desafios e enigmas. O objetivo é simples: avançar o máximo possível, superando obstáculos e resolvendo quebra-cabeças pelo caminho. 
    A cada passo, o labirinto se torna mais complicado e perigoso, testando continuamente suas habilidades e reflexos.</p>",
    "poster"=>"{$path}posterMaycon.png","banner"=>"{$path}bannerMaycon.png", "capa"=>"{$path}bannerMaycon.png","jogo"=>"http://gamehub-connect.000webhostapp.com/games/takslab_Maycon/takslab/index.html");

    echo json_encode($games);