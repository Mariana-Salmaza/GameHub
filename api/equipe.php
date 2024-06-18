<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$path = "http://localhost/GameHub/imagens/";

$equipe = array(
    array("nome" => "Mariana Salmaza", "cargo" => "Desenvolvedora do conteúdo", "foto" => "{$path}diegofoto.jpg"),
    array("nome" => "Diego Kume", "cargo" => "Desenvolvedor do jogo (Space Soldier Survival)", "foto" => "{$path}juliofoto.jpeg"),
    array("nome" => "Maycon Pedroso Macario", "cargo" => "Desenvolvedor do jogo", "foto" => "{$path}diegofoto.jpg"),
    array("nome" => "Luiz Fernando Gazola", "cargo" => "Desenvolvedor do jogo", "foto" => "{$path}fotoLuiz.jpeg")
);

echo json_encode($equipe);
?>
