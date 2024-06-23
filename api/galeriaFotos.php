<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $meuPath = "http://localhost/GameHub/imagens/";
    $diegoPath = "http://localhost/GameHub/DiegoKume/imagens_jogo/";
    $julioPath = "http://localhost/GameHub/Julio/";
    $luizPath = "http://localhost/GameHub/Luiz/imgs/";
    $MayconPath = "http://localhost/GameHub/Maycon/";


    $fotos[1] = array(
        array("foto"=>"{$meuPath}1.png"),
        array("foto"=>"{$meuPath}2.png"),
        array("foto"=>"{$meuPath}3.png"),
        array("foto"=>"{$meuPath}4.png"),
    );

    $fotos[2] = array(
        array("foto"=>"{$diegoPath}1.png"),
        array("foto"=>"{$diegoPath}2.png"),
        array("foto"=>"{$diegoPath}3.png"),
        array("foto"=>"{$diegoPath}4.png"),
    );

    $fotos[3] = array(
        array("foto"=>"{$julioPath}fotoGameJ.jpeg"),
        array("foto"=>"{$julioPath}fotoGameJ2.jpeg"),
        array("foto"=>"{$julioPath}foto1.png"),
        array("foto"=>"{$julioPath}foto2.png"),
    );

    $fotos[4] = array(
        array("foto"=>"{$luizPath}fotojogoLuiz1.jpeg"),
        array("foto"=>"{$luizPath}fotojogoLuiz2.jpeg"),
        array("foto"=>"{$luizPath}foto1.png"),
        array("foto"=>"{$luizPath}foto2.png"),
    );

    $fotos[5] = array(
        array("foto"=>"{$MayconPath}bannerMaycon.png"),
        array("foto"=>"{$MayconPath}footoM1.png"),
        array("foto"=>"{$MayconPath}fotoM2.png"),
        array("foto"=>"{$MayconPath}fotoM3.png"),
    );


    echo json_encode($fotos);

