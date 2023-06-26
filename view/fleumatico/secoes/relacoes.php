<?php?>

<link rel='stylesheet' type='text/css' media='screen' href='../css/style_relacoes.css'>

<div>
<div class="container">
</br>
    <div class="border-relacoes shadow bg-light rounded-4 my-4  row justify-content-center">
        <div class="d-flex align-items-center mt-4 justify-content-center">
            <i class="bi bi-water fs-1"></i> 
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
            <h5 class="fw-light">Selecione um dos temperamentos e veja a relação com o Fleumático:<h5>
        </div>
        <div class="border-relacoes shadow mt-5 bg-light rounded-4 col-lg-3 col-md-8 col-sm-10">
            <h4 class="fw-light p-3 text-center">FLEUMÁTICO</h4>
        </div>
        <div class="d-flex align-items-center my-2 justify-content-center">
            <i class="bi bi-arrow-down-up fs-1"></i> 
        </div>       
        <div class="border-relacoes shadow mb-5 bg-light rounded-4 p-3 col-lg-3 col-md-8 col-sm-10">
            <form method="POST" action="">
                <select name="opcao" class="form-select fw-light p-3 text-center">
                    <option selected>Selecionar</option>
                    <option value="1">MELANCÓLICO</option>
                    <option value="2">COLÉRICO</option>
                    <option value="3">SANGUÍNEO</option>
                </select>
                <button type="submit" class="btn btn-primary mt-3 col-lg-12">
                   Confirmar <i class="bi bi-check-circle-fill"></i>                   
                </button>
            </form>
        </div> 

        <?php if (isset($_POST['opcao']) && $_POST['opcao'] === '1') {?>
            <div class="border-relacoes shadow my-5 bg-light rounded-3 col-lg-10 col-md-10 col-sm-10 p-3">
                <h5 class="fw-light text-break justify-text">Fleumático e melancólico, são vizinhos por suas características em serem frios. Ambos
                introvertidos e preferem manter seus estados reservados ou privados. O melancólico pode tentar
                partir para o drama por algum problema ou fazer críticas, que o fleumático na maioria das
                vezes pode optar por apenas ignorar ou se desligar. Já o fleumático pela sua pouca energia e
                desmotivação pode cair na procrastinação e levar o melancólico junto, por isso os dois devem
                trabalhar para se manterem ativos ou até mesmo procurar por aventuras sempre que possível. É
                interessante que o melancólico pergunte sobre as emoções do fleumático e o lembre de certos
                afazeres e atividades (ART; BENNETT, 2020).<h5>
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
                <h5 class="fw-light text-break justify-text">O fleumático e o sanguíneo são temperamentos vizinhos por serem úmidos. Se dão
                muito bem por ambos buscarem a tranquilidade. O fleumático mesmo introvertido irá ouvir
                o sanguíneo falar bastante, e ao mesmo tempo pode surgir dificuldade em expressar seus
                sentimentos. Sem motivação os dois podem ficar presos na superfície, o sanguíneo pela sua
                distração e o fleumático pela sua calma excessiva. O sanguíneo precisa entender que o silêncio
                do fleumático não significa que ele não sinta suas emoções, e o mesmo tente buscar no sanguíneo
                a capacidade de se expressar melhor (ART; BENNETT, 2020).<h5>
            </div>
        <?php } ?>

    </div>
</br></br>
</div>
</div>