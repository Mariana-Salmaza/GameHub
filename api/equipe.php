<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$path = "https://gamehub-connect.000webhostapp.com/imagens/";

$equipe = array(
    array("nome" => "Mariana Salmaza", "cargo" => "Desenvolvedora do site GameHub", "foto" => "{$path}Eu.png"),
    array("nome" => "Diego Kume", "cargo" => "Desenvolvedor do jogo (Space Soldier Survival)", "foto" => "{$path}juliofoto.jpeg"),
    array("nome" => "Maycon Pedroso", "cargo" => "Desenvolvedor do jogo", "foto" => "{$path}diegofoto.jpg"),
    array("nome" => "Luiz Fernando Gazola", "cargo" => "Desenvolvedor do jogo", "foto" => "{$path}fotoLuiz.jpeg")
);

echo json_encode($equipe);
?>
