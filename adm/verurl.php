<?php
class verurl{
    function trocarUrl ($url){
        if (empty($url)){
            $url = "secoes/estante_colerico.php";
        } else {
            $url = "secoes/$url.php";
        }
        include_once ($url);
    }
}
?>