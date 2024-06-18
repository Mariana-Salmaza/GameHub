<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/GameHub/imagens/";

    $banners[1] = array("nome"=>"Enemy War","imagem"=>"{$path}bannerMeu.png","id_game"=>1);
    $banners[2] = array("nome"=>"Space Soldier Survival","imagem"=>"{$path}bannerjogo1D.png","id_game"=>2);
    $banners[3] = array("nome"=>"Parabellum","imagem"=>"{$path}BannerParabellumJulio.png","id_game"=>3);
    $banners[4] = array("nome"=>"LeMinotaur","imagem"=>"{$path}fotojogoLuiz1.jpeg","id_game"=>4);

    echo json_encode($banners);