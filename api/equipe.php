<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$path = "http://gamehub-connect.000webhostapp.com/imagens/";

$equipe = array(
    array("nome" => "Mariana Salmaza", "cargo" => "Dev. do site GameHub e do jogo Enemy War", "foto" => "{$path}Eu.png"),
    array("nome" => "Julio Guilherme", "cargo" => "Desenvolvedor do jogo Parabellum ", "foto" => "{$path}juliofoto.jpeg"),
    array("nome" => "Diego Kume", "cargo" => "Desenvolvedor do jogo Space Soldier Survival", "foto" => "{$path}diegofoto.jpg"),
    array("nome" => "Luiz Gazola", "cargo" => "Desenvolvedor do jogo LeMinotaur", "foto" => "{$path}fotoLuiz.jpeg")
);

echo json_encode($equipe);
?>
