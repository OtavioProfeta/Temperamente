<?php?>

<link rel='stylesheet' type='text/css' media='screen' href='../css/style_relacoes.css'>

<div>
<div class="container">
</br>
    <div class="border-relacoes shadow bg-light rounded-4 my-4  row justify-content-center">
        <div class="d-flex align-items-center mt-4 justify-content-center">
            <i class="bi bi-fire fs-1"></i> 
        </div>
        <div class="border-relacoes shadow mt-4 bg-light rounded-5 col-lg-10 col-md-10 col-sm-10">
            <p class="fw-light p-3 justify-text">Como vivemos quase sempre cercados por pessoas e suas diferenças, 
            sejam elas do nosso circulo de convivência ou por relações afetivas como 
            amigos e familiares, acaba por termos de aprender a lidar, conviver e respeitar 
            cada pessoa com seu diferente tipo de temperamento. Sendo assim é interessante 
            compreender como cada temperamento dominante se relaciona com os demais em seus 
            diferentes graus de qualidades como proposto por Hipócrates.</p>
        </div>
        <div class="mt-5 text-center">
            <h5 class="fw-light">Selecione um dos temperamentos e veja a relação com o Colérico:<h5>
        </div>
        <div class="border-relacoes shadow mt-5 bg-light rounded-4 col-lg-3 col-md-8 col-sm-10">
            <h4 class="fw-light p-3 text-center">COLÉRICO</h4>
        </div>
        <div class="d-flex align-items-center my-2 justify-content-center">
            <i class="bi bi-arrow-down-up fs-1"></i> 
        </div>       
        <div class="border-relacoes shadow mb-5 bg-light rounded-4 p-3 col-lg-3 col-md-8 col-sm-10">
            <form method="POST" action="">
                <select name="opcao" class="form-select fw-light p-3 text-center">
                    <option selected>Selecionar</option>
                    <option value="1">MELANCÓLICO</option>
                    <option value="2">FLEUMÁTICO</option>
                    <option value="3">SANGUÍNEO</option>
                </select>
                <button type="submit" class="btn btn-primary mt-3 col-lg-12">
                   Confirmar <i class="bi bi-check-circle-fill"></i>                   
                </button>
            </form>
        </div> 

        <?php if (isset($_POST['opcao']) && $_POST['opcao'] === '1') {?>
            <div class="border-relacoes shadow my-5 bg-light rounded-3 col-lg-10 col-md-10 col-sm-10 p-3">
                <h5 class="fw-light text-break justify-text">O colérico e o melancólico são os temperamentos secos, ambos vizinhos, 
                    e de grandes motivações e sonhos. Se entendem bem com diálogos e ideias, mas agem de formas diferentes. 
                    O melancólico costuma ser mais lento ao executar qualquer tarefa e da forma mais correta e justa possível, 
                    já o colérico anseia pela agilidade no fazer mas não se preocupa em passar pelo caminho mais correto 
                    podendo até mesmo ofender o melancólico. Os dois possuem grande influência na liderança, mas costumam guardar 
                    rancor ou dificilmente esquecem algo que os feriram (ART; BENNETT,2020).<h5>
            </div>
        <?php } ?>

        <?php if (isset($_POST['opcao']) && $_POST['opcao'] === '2') {?>
            <div class="border-relacoes shadow my-5 bg-light rounded-3 col-lg-10 col-md-10 col-sm-10 p-3">
                <h5 class="fw-light text-break justify-text">Colérico e o fleumático são de polaridade investida, em quente e seco e o outro frio 
                    e úmido, respectivamente. Mas é comum que os dois se atraiam por um ver no outro o que lhes falta. O colérico por 
                    sua alta excitabilidade e energia faz o fleumático se sentir bem e o mesmo pelo seu jeito calmo e pacífico 
                    desperta interesses no colérico. É comum que o colérico queira dominar o fleumático para ele se mova no ritmo mais 
                    rápido, mas a calma e paciência do fleumático pode levar a paz para ambos. É importante que o colérico encoraje o 
                    fleumático pois dificilmente ele tomará atitudes por si só (ART; BENNETT,2020).<h5>
            </div>
        <?php } ?>

        <?php if (isset($_POST['opcao']) && $_POST['opcao'] === '3') {?>
            <div class="border-relacoes shadow my-5 bg-light rounded-3 col-lg-10 col-md-10 col-sm-10 p-3">
                <h5 class="fw-light text-break justify-text">O colérico e o sanguíneo são dois temperamentos quentes, ambos vizinhos, que possuem grande 
                    equilíbrio em produtividade e diversão. São ótimos em comunicação, otimistas, buscadores de aventuras e atividades. O colérico 
                    pode tentar exercer domínio ou controle sobre o sanguíneo, e até mesmo o criticar, e o sanguíneo pode até se magoar fácil mas 
                    o perdoa fácil. O sanguíneo pode buscar muitas vezes chamar a atenção ou ser o centro das ocasiões. Por outro lado o sanguíneo 
                    pode capacitar o colérico a ser mais gentil e buscar relações mais intimas, já o colérico eleva o foco e a dedicação do sanguíneo (ART; BENNETT,2020).<h5>
            </div>
        <?php } ?>

    </div>
</br></br>
</div>
</div>