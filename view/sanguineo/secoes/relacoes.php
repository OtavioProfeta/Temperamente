<?php?>

<link rel='stylesheet' type='text/css' media='screen' href='../css/style_relacoes.css'>

<div>
<div class="container">
</br>
    <div class="border-relacoes shadow bg-light rounded-4 my-4  row justify-content-center">
        <div class="d-flex align-items-center mt-4 justify-content-center">
            <i class="bi bi-cloud-haze2 fs-1"></i> 
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
            <h5 class="fw-light">Selecione um dos temperamentos e veja a relação com o Sanguíneo:<h5>
        </div>
        <div class="border-relacoes shadow mt-5 bg-light rounded-4 col-lg-3 col-md-8 col-sm-10">
            <h4 class="fw-light p-3 text-center">SANGUÍNEO</h4>
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
                    <option value="3">COLÉRICO</option>
                </select>
                <button type="submit" class="btn btn-primary mt-3 col-lg-12">
                    Confirmar <i class="bi bi-check-circle-fill"></i>                   
                </button>
            </form>
        </div> 

        <?php if (isset($_POST['opcao']) && $_POST['opcao'] === '1') {?>
            <div class="border-relacoes shadow my-5 bg-light rounded-3 col-lg-10 col-md-10 col-sm-10 p-3">
                <h5 class="fw-light text-break justify-text">Melancólico e o sanguíneo, são temperamentos opostos, um de qualidade fria e seca, e
                o outro quente e úmido. Ambos se atraem pelas diferenças do outro, enquanto o melancólico na
                sua lentidão busca se retrair, o sanguíneo o arrasta para as aventuras e alegrias. Por outro lado a
                profundidade e constância do melancólico ajuda o sanguíneo deixar a lerdeza e a superficialidade.
                É preciso que o sanguíneo respeite o espaço do melancólico em seu processo pois aos ele vai se
                desenvolvendo. E já o melancólico seja menos crítico ao sanguíneo para não o cause ansiedades
                e inseguranças (ART; BENNETT, 2020).<h5>
            </div>
        <?php } ?>

        <?php if (isset($_POST['opcao']) && $_POST['opcao'] === '2') {?>
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