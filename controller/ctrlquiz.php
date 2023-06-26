<?php
//Declaramos a variável que vai receber o conteúdo da lista
$boxValor = null;
$lista = array();

$melancolico = 0;
$colerico = 0;
$fleumatico = 0;
$sanguineo = 0;

//Verificamos se o índice existe
if (isset($_POST['boxval'])){

    //Atribuimos a variável todo conteúdo do índice
    $boxValor = $_POST['boxval'];
    //Verificamos se a variável não é nula
    if ($boxValor !== null){
        //Percorremos todos os conteúdos do array
        for ($i = 0; $i < count($boxValor); $i++){
            //exibimos o valor atual na tela
            //echo "<p>{$boxValor[$i]}</p>";
            $lista[] = $boxValor[$i];
                //soma 1 como valor para a característica do temperamento
                if ($boxValor[$i] == 'm'){
                    $melancolico += 1;
                }

                if ($boxValor[$i] == 'c'){
                    $colerico += 1;
                }

                if ($boxValor[$i] == 'f'){
                    $fleumatico += 1;
                }

                if ($boxValor[$i] == 's'){
                    $sanguineo += 1;
                }

                if ($boxValor[$i] == 'frio') {
                    $melancolico += 0.5;
                    $fleumatico += 0.5;
                }
                if ($boxValor[$i] == 'quente') {
                    $colerico += 0.5;
                    $fleumatico += 0.5;
                }
            } 
           
        if ($melancolico > $colerico && $melancolico > $sanguineo && $melancolico > $fleumatico){
            header("location: ../view/melancolico/main.php?principal");
            }
                if ($melancolico == $colerico or $melancolico == $sanguineo or $melancolico == $fleumatico){
                    echo '<script>alert("Resultato impreciso ou duplicado! (Por favor refaça o teste!)")</script>';
                    echo "<script>location = '../view/quiz.php';</script>";
                }
        if ($colerico > $melancolico && $colerico > $sanguineo && $colerico > $fleumatico){
            header("location: ../view/colerico/main.php?principal");
                if ($colerico == $melancolico or $colerico == $sanguineo or $colerico == $fleumatico){
                    echo '<script>alert("Resultato impreciso ou duplicado! (Por favor refaça o teste!)")</script>';
                    echo "<script>location = '../view/quiz.php';</script>";
                }
        }
        if ($sanguineo > $colerico && $sanguineo > $melancolico && $sanguineo > $fleumatico){
            header("location: ../view/sanguineo/main.php?principal");
                if ($sanguineo == $colerico or $sanguineo == $melancolico or $sanguineo == $fleumatico){
                    echo '<script>alert("Resultato impreciso ou duplicado! (Por favor refaça o teste!)")</script>';
                    echo "<script>location = '../view/quiz.php';</script>";
                }
        }
        if ($fleumatico > $colerico && $fleumatico > $sanguineo && $fleumatico > $melancolico){
            header("location: ../view/fleumatico/main.php?principal");
                if ($fleumatico == $colerico or $fleumatico == $sanguineo or $fleumatico == $melancolico){
                    echo '<script>alert("Resultato impreciso ou duplicado! (Por favor refaça o teste!)")</script>';
                    echo "<script>location = '../view/quiz.php';</script>";
                }
        } 
        

    } 
}
if ($melancolico == 0 && $colerico == 0 && $sanguineo == 0 && $fleumatico == 0) {
    echo '<script>alert("Nehuma característica preenchida! (Por favor refaça o teste!)")</script>';
    echo "<script>location = '../view/quiz.php';</script>";
} 

?>