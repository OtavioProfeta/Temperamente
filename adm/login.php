<?php
include_once ("../model/manipuladados.php");
$manipula = new manipuladados();

$login = $_POST["txtNome"];
$password = $_POST["txtSenha"];
$linhas = $manipula->validarlogin($login, $password);

echo "Linhas".$linhas;

if($linhas == 0){
    echo '<script>alert("Usuário ou Senha do Admin não cadastrado ou incorreto")</script>';
    echo "<script>location = 'index.php';</script>";
}else{

    setcookie("nome_usuario", $login);
    setcookie("senha_usuario", $password);
    header("location:principal.php?secao=estante_colerico");
}
?>
