<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $meuPath = "http://gamehub-connect.000webhostapp.com/imagens/";
    $diegoPath = "http://gamehub-connect.000webhostapp.com/DiegoKume/imagens_jogo/";
    $julioPath = "http://gamehub-connect.000webhostapp.com/Julio/";
    $luizPath = "http://gamehub-connect.000webhostapp.com/Luiz/imgs/";
    $MayconPath = "http://gamehub-connect.000webhostapp.com/Maycon/";


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
        array("foto"=>"{$julioPath}1.png"),
        array("foto"=>"{$julioPath}2.png"),
        array("foto"=>"{$julioPath}3.png"),
        array("foto"=>"{$julioPath}4.png"),
    );

    $fotos[4] = array(
        array("foto"=>"{$luizPath}1.png"),
        array("foto"=>"{$luizPath}2.png"),
        array("foto"=>"{$luizPath}3.png"),
        array("foto"=>"{$luizPath}4.png"),
    );

    $fotos[5] = array(
        array("foto"=>"{$MayconPath}1.png"),
        array("foto"=>"{$MayconPath}2.png"),
        array("foto"=>"{$MayconPath}3.png"),
        array("foto"=>"{$MayconPath}4.png"),
    );


    echo json_encode($fotos);

