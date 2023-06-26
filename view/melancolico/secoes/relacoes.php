<?php?>

<link rel='stylesheet' type='text/css' media='screen' href='../css/style_relacoes.css'>

<div>
<div class="container">
</br>
    <div class="border-relacoes shadow bg-light rounded-4 my-4  row justify-content-center">
        <div class="d-flex align-items-center mt-4 justify-content-center">
            <i class="bi bi-tree fs-1"></i> 
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
            <h5 class="fw-light">Selecione um dos temperamentos e veja a relação com o Melancólico:<h5>
        </div>
        <div class="border-relacoes shadow mt-5 bg-light rounded-4 col-lg-3 col-md-8 col-sm-10">
            <h4 class="fw-light p-3 text-center">MELANCÓLICO</h4>
        </div>
        <div class="d-flex align-items-center my-2 justify-content-center">
            <i class="bi bi-arrow-down-up fs-1"></i> 
        </div>       
        <div class="border-relacoes shadow mb-5 bg-light rounded-4 p-3 col-lg-3 col-md-8 col-sm-10">
            <form method="POST" action="">
                <select name="opcao" class="form-select fw-light p-3 text-center">
                    <option selected>Selecionar</option>
                    <option value="1">COLÉRICO</option>
                    <option value="2">FLEUMÁTICO</option>
                    <option value="3">SANGUÍNEO</option>
                </select>
                <button type="submit" class="btn btn-primary mt-3 col-lg-12">
                  Confirmar  <i class="bi bi-check-circle-fill"></i>                   
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
                <h5 class="fw-light text-break justify-text">Fleumático e melancólico, são vizinhos por suas características em serem frios. Ambos
                introvertidos e preferem manter seus estados reservados ou privados. O melancólico pode tentar
                partir para o drama por algum problema ou fazer críticas, que o fleumático na maioria das
                vezes pode optar por apenas ignorar ou se desligar. Já o fleumático pela sua pouca energia e
                desmotivação pode cair na procrastinação e levar o melancólico junto, por isso os dois devem
                trabalhar para se manterem ativos ou até mesmo procurar por aventuras sempre que possível. É
                interessante que o melancólico pergunte sobre as emoções do fleumático e o lembre de certos
                afazeres e atividades (ART; BENNETT, 2020)..<h5>
            </div>
        <?php } ?>

        <?php if (isset($_POST['opcao']) && $_POST['opcao'] === '3') {?>
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

    </div>
</br></br>
</div>
</div>