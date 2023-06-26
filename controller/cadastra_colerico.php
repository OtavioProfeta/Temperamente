<?php
include_once("../model/manipuladados.php");
function converte ($String){
    return iconv("UTF-8", "ISO8859-1", $String);
}

$musica = $_POST["musicas"];
$livro = $_POST["livros"];
$profissao = $_POST["profissoes"];
$hobbie = $_POST["hobbies"];
$filme = $_POST["filmes"];
$serie = $_POST["series"];
$autor = $_POST["autor"];



$cadastra = new manipuladados();
$cadastra->setTable("tb_colerico");
$cadastra->setFields("musicas,livros,profissoes,hobbies,filmes,series,autor");
$cadastra->setDados("'$musica','$livro','$profissao','$hobbie','$filme','$serie','$autor'");
$cadastra->insert();

echo '<script>alert("'.$cadastra->getStatus().'");</script>';
echo "<script>location = '../view/colerico/main.php?secao=estante';</script>"
?>