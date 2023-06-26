<?php
include_once("../../model/manipuladados.php");

if (isset($_POST["botao"]) && $_POST["botao"] === "excluir") {

    $id = $_POST["id"];

    $excluir = new manipuladados();
    $excluir->setTable("tb_fleumatico");
    $excluir->setFieldId("id");
    $excluir->setValueId($id);
    $excluir->delete();

    echo '<script>alert("O item foi removido com sucesso.");</script>';
    echo '<script>location = "../principal.php?secao=estante_fleumatico";</script>';
}
?>




