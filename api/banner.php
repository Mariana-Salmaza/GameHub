<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/GameHub/imagens/";

    $banners[0] = array("nome"=>"Enemy War","imagem"=>"{$path}bannerjogo1.png","id_game"=>1);
    $banners[1] = array("nome"=>"Space Soldier Survival","imagem"=>"{$path}bannerMeu.png","id_game"=>2);

    echo json_encode($banners);