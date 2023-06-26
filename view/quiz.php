<?php?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/icon_mente.png">
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap/css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style_quiz.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap_icons/font/bootstrap-icons.css'>
    <title>Temperamente</title>
</head>
<body>
	<div class="container">
          <h3 class="text-center mt-4 fw-light">Teste de temperamento</h3>

          <div class="row justify-content-center">
              <div class="border-box shadow my-4 bg-light rounded-5 col-lg-8 col-md-8 col-sm-10">
                  <div class="d-flex align-items-center justify-content-center">
                      <i class="bi bi-exclamation-circle-fill fs-2"></i> 
                  </div>
                  <p class="fw-light p-3 justify-text">Este teste foi inspirado no livro de Art Bennet e Laraine Bennet, 
                    cujo o propósito é auxiliar por meio desta ferramenta, pessoas a identificarem seu temperamento dominante.
                    É importante que o usuário entenda que este teste não é preciso e que várias vertentes podem
                    influenciar no resultado final, podendo ser realizado mais de uma vez caso necessário. Esta é apenas 
                    uma de muitas ferramentas que ajudam no processo onde <em>é de responsabilidade do indivíduo estudar e discernir</em> 
                    para descobrir o seu temperamento!
                  </p>
              </div> 
          </div>
  
          <div class="container-fluid border-quiz p-1 my-4">
            <div class="d-flex align-items-center text-center my-4 justify-content-center">
                <h4 class="fw-light">Por favor, selecione as opções que melhor se identifiquem com você:</h4>
            </div>         
            <div id="carouselExampleControls" class="carousel slide mt-2" data-interval="false">
              <div class="carousel-inner my-3">

              <form class="text-break" method="post" action="../controller/ctrlquiz.php">
                <div class="carousel-item active">
                  <div class="row row-cols-12">
                    <div class="col-10">
                      <div class="form-check mx-5">           
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="frio">
                          <label class="form-check-label" for="frio"><h6>Age lentamente em uma situação</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="quente">
                          <label class="form-check-label" for="quente"><h6>Age rapidamente em uma situação</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Pacífico</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Determinado</h6></label></br>

                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Aceito fácil condições propostas</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Impressões duram por longo tempo</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Gosta da liderança</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>É paciente</h6></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                  </div>
                </div>

              <div class="carousel-item">
                <div class="row row-cols-12">
                    <div class="col-1" style="pointer-events: none;">
                      <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-circle-fill fs-2" style="pointer-events: auto;"></i>
                      </button>
                    </div>
                  <div class="col-10">  
                    <div class="form-check mx-5">                  
                        <input class="form-check-input" type="checkbox" name="boxval[]" value="quente">
                        <label class="form-check-label" for="quente"><h6>Age fortemente em situações</h6></label><br>
                        <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                        <label class="form-check-label" for="m"><h6>Introspectivo</h6></label><br>
                        <input class="form-check-input" type="checkbox" name="boxval[]" value="quente">
                        <label class="form-check-label" for="quente"><h6>Extrovertido</h6></label><br>
                        <input class="form-check-input" type="checkbox" name="boxval[]" value="frio">
                        <label class="form-check-label" for="frio"><h6>Pessimista</h6></label></br>

                        <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                        <label class="form-check-label" for="c"><h6>Deixa as coisas escaparem</h6></label><br>
                        <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                        <label class="form-check-label" for="f"><h6>Obediente</h6></label><br>
                        <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                        <label class="form-check-label" for="s"><h6>Distraído</h6></label><br>
                        <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                        <label class="form-check-label" for="m"><h6>Cuidadoso</h6></label>
                    </div>
                  </div>
                </div>
                <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                </div>
              </div>

                <div class="carousel-item">
                  <div class="row row-cols-12">
                    <div class="col-1" style="pointer-events: none;">
                      <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-circle-fill fs-2" style="pointer-events: auto;"></i>
                      </button>
                    </div>
                    <div class="col-10">  
                      <div class="form-check mx-5">
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Prefere estruturas ou procedimentos</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Aprecia elogios</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Toma a responsabilidade</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Odeia conflito</h6></label></br>                   

                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Prático</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Se considera uma companhia amável</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Ama debater</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Aprecia detalhes</h6></label>    
                      </div>
                    </div>
                  </div>
                  <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                  </div>                  
                </div>

                <div class="carousel-item">
                  <div class="row row-cols-12">
                    <div class="col-1" style="pointer-events: none;">
                      <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-circle-fill fs-2" style="pointer-events: auto;"></i>
                      </button>
                    </div>
                    <div class="col-10">  
                      <div class="form-check mx-5">
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Interage bem com pessoas</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Abomina sentimentalismo</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="frio">
                          <label class="form-check-label" for="frio"><h6>Introvertido</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Age intencionalmente</h6></label></br>                 

                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Não gosta da desordem</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>É perseverante</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="frio">
                          <label class="form-check-label" for="frio"><h6>Fiel</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Gosta de ser o centro das atenções</h6></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                  </div>                 
                </div>

                <div class="carousel-item">
                  <div class="row row-cols-12">
                    <div class="col-1" style="pointer-events: none;">
                      <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-circle-fill fs-2" style="pointer-events: auto;"></i>
                      </button>
                    </div>
                    <div class="col-10">  
                      <div class="form-check mx-5">
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="quente">
                          <label class="form-check-label" for="quente"><h6>Otimista</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Carismático</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Detesta injustiças</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>É tolerante</h6></label></br>                     

                          <input class="form-check-input" type="checkbox" name="boxval[]" value="frio">
                          <label class="form-check-label" for="frio"><h6>Ama a paz e silêncio</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Gosta de festas</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>É equilibrado</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Corajoso</h6></label>                   
                      </div>
                    </div>
                  </div>
                  <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                  </div>      
                </div>

                <div class="carousel-item">
                  <div class="row row-cols-12">
                    <div class="col-1" style="pointer-events: none;">
                      <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-circle-fill fs-2" style="pointer-events: auto;"></i>
                      </button>
                    </div>
                    <div class="col-10"> 
                      <div class="form-check mx-5">
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="frio">
                          <label class="form-check-label" for="frio"><h6>Pensativo</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Gosta de estar sempre certo</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Sentimental</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Vingativo</h6></label></br>                     

                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Faz amigos rapidamente</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="frio">
                          <label class="form-check-label" for="frio"><h6>É duvidoso</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Não demonstra afeto</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>É educado</h6></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row row-cols-12">
                    <div class="col-1" style="pointer-events: none;">
                      <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-circle-fill fs-2" style="pointer-events: auto;"></i>
                      </button>
                    </div>
                    <div class="col-10"> 
                      <div class="form-check mx-5">
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="quente">
                          <label class="form-check-label" for="quente"><h6>É impaciente</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Metódico</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Racional</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Fala bastante</h6></label></br>                     

                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Desconfiado</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Adaptável</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Afetuoso</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Gosta de farra</h6></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row row-cols-12">
                    <div class="col-1" style="pointer-events: none;">
                      <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-circle-fill fs-2" style="pointer-events: auto;"></i>
                      </button>
                    </div>
                    <div class="col-10"> 
                      <div class="form-check mx-5">
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="quente">
                          <label class="form-check-label" for="quente"><h6>Facilmente irritado</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Prefere a lógica</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Busca paz interior</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Gosta de tomar a iniciativa</h6></label></br>                    

                          <input class="form-check-input" type="checkbox" name="boxval[]" value="frio">
                          <label class="form-check-label" for="frio"><h6>Reservado</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>É rápido e decidido</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>É animado</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Artístico</h6></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row row-cols-12">
                    <div class="col-1" style="pointer-events: none;">
                      <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-circle-fill fs-2" style="pointer-events: auto;"></i>
                      </button>
                    </div>
                    <div class="col-10"> 
                      <div class="form-check mx-5">
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Questiona sobre fatos passados</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Toma a liderança do grupo</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Facilmente magoado</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="quente">
                          <label class="form-check-label" for="quente"><h6>Entusiasmado</h6></label></br>

                          <input class="form-check-input" type="checkbox" name="boxval[]" value="quente">
                          <label class="form-check-label" for="quente"><h6>Confiante em si mesmo</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Se importa com a aparência</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>É respeitoso</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Tímido</h6></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                  </div>     
                </div>

                <div class="carousel-item">
                  <div class="row row-cols-12">
                    <div class="col-1" style="pointer-events: none;">
                      <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-circle-fill fs-2" style="pointer-events: auto;"></i>
                      </button>
                    </div>
                    <div class="col-10"> 
                      <div class="form-check mx-5">
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Sensível</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Gosta de mudanças</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Gosta de ajudar</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>É competitivo</h6></label></br>                   
 
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Pessoa aberta e sociável</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Indeciso</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Calmo sob tensão</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Gosta de motivar os outros</h6></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                  </div>  
                </div>

                <div class="carousel-item">
                  <div class="row row-cols-12">
                    <div class="col-1" style="pointer-events: none;">
                      <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-circle-fill fs-2" style="pointer-events: auto;"></i>
                      </button>
                    </div>
                    <div class="col-10"> 
                      <div class="form-check mx-5">
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Procrastinador</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>Tende a ficar na superficialidade</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>Tende a ficar na profundidade</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Exige reconhecimento</h6></label></br>

                          <input class="form-check-input" type="checkbox" name="boxval[]" value="m">
                          <label class="form-check-label" for="m"><h6>É analítico</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="c">
                          <label class="form-check-label" for="c"><h6>Persistente</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="f">
                          <label class="form-check-label" for="f"><h6>Necessita de encorajamento</h6></label><br>
                          <input class="form-check-input" type="checkbox" name="boxval[]" value="s">
                          <label class="form-check-label" for="s"><h6>É impulsivo</h6></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-1" style="pointer-events: none;">
                    <button type="submit" class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill fs-2" style="pointer-events: auto;"></i>
                    </button>
                  </div>
                </div>

                <div class="text-center carousel-item my-4">
                  <div>
                    <button type="submit" class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <i class="bi bi-arrow-left-circle-fill fs-2"></i>
                    </button>
                  </div>
                  <div>
                    <h4 class="position-absolute top-0 start-50 translate-middle-x text-center mb-5 fw-light">Ao concluir o teste você será direcionado para a 
                      página do temperamento correspondente ao resultado:</h4></br></br></br></br>
                  </div>
                  </br></br>
                  <div class="mt-5">
                    <input type="submit" value="Concluir" class="btn btn-primary">
                  </div>
                  
                </div>
              </form>             
            </div>
          </div>
        </div>

        <div class="text-center my-5">
          <a class="btn btn-primary-quiz" href="../index.php" role="button">Voltar a página incial</a>
        </div>
</body>
<script src='bootstrap/js/bootstrap.bundle.js'></script>
</html>