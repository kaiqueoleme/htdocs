<?php

/*$produtos = [
    ["Processador", "900"],
    ["Mouse", "15"],
    ["Teclado", "20"],
    ["Impressora", "500"],
    ["Monitor", "450"],
    ["Placa de Vídeo", "1500"],
    ["Memória RAM 8G", "500"],
    ["Placa Mãe", "600"],
    ["Mouse Pad", "25"],
    ["SSD", "245"],
];

echo $produtos[0][0];
*/

$produtosAssociativo = array(
    array("nome" => "Processador", "valor" => "900"),
    array("nome" => "Mouse", "valor" => "15"),
    array("nome" => "Teclado", "valor" => "20"),
    array("nome" => "Impressora", "valor" => "500"),
    array("nome" => "Monitor", "valor" => "450"),
    array("nome" => "Placa de Vídeo", "valor" => "1500"),
    array("nome" => "Memória RAM 8G", "valor" => "500"),
    array("nome" => "Placa Mãe", "valor" => "600"),
    array("nome" => "Mouse Pad", "valor" => "25"),
    array("nome" => "SSD", "valor" => "245"),
);

echo $produtosAssociativo[0]["nome"];
