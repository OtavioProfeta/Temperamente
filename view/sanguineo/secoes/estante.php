<?php include_once("../../model/manipuladados.php"); ?>

<link rel='stylesheet' type='text/css' media='screen' href='../css/style_estante.css'>

<div class="container-fluid img-estante">
</br>
<div class="container text-center">
    <div class="bg-light mt-4 rounded-5 mb-4">
            <div class="d-flex align-items-center mt-4 justify-content-center ">
                <i class="bg-light rounded-4 bi bi-cloud-haze2 fs-1 mb-2 p-2"></i> 
            </div>
            <h2 class="mx-2 fw-light text-break">Experiências sugestivas de outras pessoas Sanguíneas:</h2>
                </br>
                </br>
    </div>
    <div class="row row-cols-2">
        <div class="rounded-4 border-estante col img2-estante">
            <div class="d-flex align-items-center justify-content-center">
                <i class="bi bi-headphones fs-2 me-2"></i>
                <h5 class="font-estant mt-2">Músicas</h5>  
            </div>                   
            <aside class="my-4">
                <div id="carouselExampleControls-1" class="carousel slide" data-interval="false">
                    <div class="carousel-inner p-2">                       
                        <?php
                        $busca = new manipuladados();
                        $busca->setTable("tb_sanguineo");
                        $resultado = $busca->getAllDataTable();

                        shuffle($resultado);

                        $activeClass = 'active';
                        foreach ($resultado as $index => $row) {
                            ?>
                            <div class="carousel-item <?= $activeClass; ?>">
                                <?php if( $row['musicas'] != null){ ?>
                                <h3><?= $row['musicas']; ?></h3>
                                <?php }else{ ?>
                                <h3>Não inserido</h3>
                                <?php } ?> 
                                
                                <!--Caso o usuário tenha se indentificado na sujestão irá apareceu seu nome-->
                                <?php if( $row['autor'] != null){ ?>
                                <h5 class="fs-6">Por: <?= $row['autor']; ?></h5>
                                <?php }else{ ?>
                                <h5 class="fs-6">Desconhecido</h5>
                                <?php } ?>
                            </div>
                            <?php
                            $activeClass = '';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-next position-absolute top-100 start-90 translate-middle" type="button" data-bs-target="#carouselExampleControls-1" data-bs-slide="next">
                        <i class="bi bi-arrow-repeat fs-1"></i>
                    </button>
                </div>
            </aside>
        </div>
        
        <div class="rounded-4 border-estante col img2-estante">
        <div class="d-flex align-items-center justify-content-center">
                <i class="bi bi-book-half fs-2 me-2"></i>
                <h5 class="font-estant mt-2">Livros</h5>  
            </div>                   
            <aside class="my-4">
                <div id="carouselExampleControls-2" class="carousel slide" data-interval="false">
                    <div class="carousel-inner p-2">                       
                        <?php
                        $busca = new manipuladados();
                        $busca->setTable("tb_sanguineo");
                        $resultado = $busca->getAllDataTable();

                        shuffle($resultado);

                        $activeClass = 'active';
                        foreach ($resultado as $index => $row) {
                            ?>
                            <div class="carousel-item <?= $activeClass; ?>">                              
                                <?php if( $row['livros'] != null){ ?>
                                <h3 class="text-break"><?= $row['livros']; ?></h3>
                                <?php }else{ ?>
                                <h3>Não inserido</h3>
                                <?php } ?>                                                                               
                                
                                <!--Caso o usuário tenha se indentificado na sujestão irá apareceu seu nome-->
                                <?php if( $row['autor'] != null){ ?>
                                <h5 class="fs-6">Por: <?= $row['autor']; ?></h5>
                                <?php }else{ ?>
                                <h5 class="fs-6">Desconhecido</h5>
                                <?php } ?>
                            </div>
                            <?php
                            $activeClass = '';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-next position-absolute top-100 start-90 translate-middle" type="button" data-bs-target="#carouselExampleControls-2" data-bs-slide="next">
                        <i class="bi bi-arrow-repeat fs-1"></i>
                    </button>
                </div>
            </aside>
        </div>

        <div class="rounded-4 border-estante col img2-estante">
        <div class="d-flex align-items-center justify-content-center">
                <i class="bi bi-briefcase-fill fs-2 me-2"></i>
                <h5 class="font-estant mt-2">Profissões</h5>  
            </div>                   
            <aside class="my-4">
                <div id="carouselExampleControls-3" class="carousel slide" data-interval="false">
                    <div class="carousel-inner p-2">                       
                        <?php
                        $busca = new manipuladados();
                        $busca->setTable("tb_sanguineo");
                        $resultado = $busca->getAllDataTable();

                        shuffle($resultado);

                        $activeClass = 'active';
                        foreach ($resultado as $index => $row) {
                            ?>
                            <div class="carousel-item <?= $activeClass; ?>">                              
                                <?php if( $row['profissoes'] != null){ ?>
                                <h3><?= $row['profissoes']; ?></h3>
                                <?php }else{ ?>
                                <h3>Não inserido</h3>
                                <?php } ?> 
                                
                                <!--Caso o usuário tenha se indentificado na sujestão irá apareceu seu nome-->
                                <?php if( $row['autor'] != null){ ?>
                                <h5 class="fs-6">Por: <?= $row['autor']; ?></h5>
                                <?php }else{ ?>
                                <h5 class="fs-6">Desconhecido</h5>
                                <?php } ?>
                            </div>
                            <?php
                            $activeClass = '';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-next position-absolute top-100 start-90 translate-middle" type="button" data-bs-target="#carouselExampleControls-3" data-bs-slide="next">
                        <i class="bi bi-arrow-repeat fs-1"></i>
                    </button>
                </div>
            </aside>
        </div>

        <div class="rounded-4 border-estante col img2-estante">
        <div class="d-flex align-items-center justify-content-center">
                <i class="bi bi-brush-fill fs-2 me-2"></i>
                <h5 class="font-estant mt-2">Hobbies</h5>  
            </div>                   
            <aside class="my-4">
                <div id="carouselExampleControls-4" class="carousel slide" data-interval="false">
                    <div class="carousel-inner p-2">                       
                        <?php
                        $busca = new manipuladados();
                        $busca->setTable("tb_sanguineo");
                        $resultado = $busca->getAllDataTable();

                        shuffle($resultado);

                        $activeClass = 'active';
                        foreach ($resultado as $index => $row) {
                            ?>
                            <div class="carousel-item <?= $activeClass; ?>">                              
                                <?php if( $row['hobbies'] != null){ ?>
                                <h3><?= $row['hobbies']; ?></h3>
                                <?php }else{ ?>
                                <h3>Não inserido</h3>
                                <?php } ?> 
                                
                                <!--Caso o usuário tenha se indentificado na sujestão irá apareceu seu nome-->
                                <?php if( $row['autor'] != null){ ?>
                                <h5 class="fs-6">Por: <?= $row['autor']; ?></h5>
                                <?php }else{ ?>
                                <h5 class="fs-6">Desconhecido</h5>
                                <?php } ?>
                            </div>
                            <?php
                            $activeClass = '';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-next position-absolute top-100 start-90 translate-middle" type="button" data-bs-target="#carouselExampleControls-4" data-bs-slide="next">
                        <i class="bi bi-arrow-repeat fs-1"></i>
                    </button>
                </div>
            </aside>
        </div>

        <div class="rounded-4 border-estante col img2-estante">
        <div class="d-flex align-items-center justify-content-center">
                <i class="bi bi-film fs-2 me-2"></i>
                <h5 class="font-estant mt-2">Filmes</h5>  
            </div>                   
            <aside class="my-4">
                <div id="carouselExampleControls-5" class="carousel slide" data-interval="false">
                    <div class="carousel-inner p-2">                       
                        <?php
                        $busca = new manipuladados();
                        $busca->setTable("tb_sanguineo");
                        $resultado = $busca->getAllDataTable();

                        shuffle($resultado);

                        $activeClass = 'active';
                        foreach ($resultado as $index => $row) {
                            ?>
                            <div class="carousel-item <?= $activeClass; ?>">                              
                                <?php if( $row['filmes'] != null){ ?>
                                <h3><?= $row['filmes']; ?></h3>
                                <?php }else{ ?>
                                <h3>Não inserido</h3>
                                <?php } ?> 
                                
                                <!--Caso o usuário tenha se indentificado na sujestão irá apareceu seu nome-->
                                <?php if( $row['autor'] != null){ ?>
                                <h5 class="fs-6">Por: <?= $row['autor']; ?></h5>
                                <?php }else{ ?>
                                <h5 class="fs-6">Desconhecido</h5>
                                <?php } ?>
                            </div>
                            <?php
                            $activeClass = '';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-next position-absolute top-100 start-90 translate-middle" type="button" data-bs-target="#carouselExampleControls-5" data-bs-slide="next">
                        <i class="bi bi-arrow-repeat fs-1"></i>
                    </button>
                </div>
            </aside>
        </div>

        <div class="rounded-4 border-estante col img2-estante">
        <div class="d-flex align-items-center justify-content-center">
                <i class="bi bi-camera-reels-fill fs-2 me-2"></i>
                <h5 class="font-estant mt-2">Séries</h5>  
            </div>                   
            <aside class="my-4">
                <div id="carouselExampleControls-6" class="carousel slide" data-interval="false">
                    <div class="carousel-inner p-2">                       
                        <?php
                        $busca = new manipuladados();
                        $busca->setTable("tb_sanguineo");
                        $resultado = $busca->getAllDataTable();

                        shuffle($resultado);

                        $activeClass = 'active';
                        foreach ($resultado as $index => $row) {
                            ?>
                            <div class="carousel-item <?= $activeClass; ?>">                              
                                <?php if( $row['series'] != null){ ?>
                                <h3><?= $row['series']; ?></h3>
                                <?php }else{ ?>
                                <h3>Não inserido</h3>
                                <?php } ?> 
                                
                                <!--Caso o usuário tenha se indentificado na sujestão irá apareceu seu nome-->
                                <?php if( $row['autor'] != null){ ?>
                                <h5 class="fs-6">Por: <?= $row['autor']; ?></h5>
                                <?php }else{ ?>
                                <h5 class="fs-6">Desconhecido</h5>
                                <?php } ?>
                            </div>
                            <?php
                            $activeClass = '';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-next position-absolute top-100 start-90 translate-middle" type="button" data-bs-target="#carouselExampleControls-6" data-bs-slide="next">
                        <i class="bi bi-arrow-repeat fs-1"></i>
                    </button>
                </div>
            </aside>    
        </div>
    </div>
</div>
</br></br>

<div class="row justify-content-center">
    <div class="border-box shadow mb-5 bg-light rounded-5 col-lg-6 col-md-8 col-sm-10">
        <div class="d-flex align-items-center justify-content-center">
            <i class="bi bi-exclamation-circle-fill fs-1"></i> 
        </div>
        <div class="d-flex align-items-center text-center my-4 justify-content-center">
                <h4 class="fw-light">Indique seus gostos ou sugestões para outros Sanguíneos:</h4>
        </div>
        <p class="fw-light p-3 justify-text">O formulário abaixo tem o objetivo de sujerir apenas elementos destinados
        a pessoas do temperamento Colérico. Caso você não seja, sujerimos que faça o teste <a href="../quiz.php">clicando aqui</a>
        para que descubra o seu temperamento e contribua com os elementos na sessão do mesmo! 
        Para que sua sujestão não ser exluída, é necessário seguir as seguintes orientações:</p>
        <div class="text-center">
            <p class="fw-semibold">Não denegrir imagem de nenhum indivíduo ou cultura</p>
            <p class="fw-semibold">Não sugerir elementos violentos ou sexuais</p>
            <p class="fw-semibold">Optar pela objetividade</p>
            <p class="fw-semibold">Insira os elementos nos campos adequados</p>
        </div>

    </div> 
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="img3-estante border-estante-2 col-lg-6 col-md-8 col-sm-10">
            <div class=" border-estante-2 my-5 ms-3">
                <form method="post" action="../../controller/cadastra_sanguineo.php">
                        <div class="d-flex me-3 align-items-center">
                            <i class=" bi bi-headphones fs-1 mx-3 custom-icon"></i>
                            <input type="text" class="form-control" name="musicas" placeholder="Indique uma música">
                        </div>

                        <div class="d-flex me-3 align-items-center">
                            <i class=" bi bi-book-half fs-1 mx-3 custom-icon"></i>
                            <input type="text" class="form-control" name="livros" placeholder="Indique um livro">
                        </div>

                        <div class="d-flex me-3 align-items-center">
                            <i class="bi bi-briefcase-fill fs-1 mx-3 custom-icon"></i>
                            <input type="text" class="form-control" name="profissoes" placeholder="Indique uma profissão">
                        </div>

                        <div class="d-flex me-3 align-items-center">
                            <i class="bi bi-brush-fill fs-1 mx-3 custom-icon"></i>
                            <input type="text" class="form-control" name="hobbies" placeholder="Indique um hobbie">
                        </div>

                        <div class="d-flex me-3 align-items-center">
                            <i class="bi bi-film fs-1 mx-3 custom-icon"></i>
                            <input type="text" class="form-control" name="filmes" placeholder="Indique um filme">
                        </div>

                        <div class="d-flex me-3 align-items-center">
                            <i class="bi bi-camera-reels-fill fs-1 mx-3 custom-icon"></i>
                            <input type="text" class="form-control" name="series" placeholder="Indique uma série">
                        </div>

                        <div class="d-flex me-3 align-items-center">
                            <i class="bi bi-person-circle fs-1 mx-3 custom-icon"></i>
                            <input type="text" class="form-control" name="autor" placeholder="Deixe seu nome (opcional)">
                        </div>

                        <div class="d-flex me-3 align-items-center justify-content-center"> 
                            <input class="my-2 btn btn-success-estante" type="submit" value="Enviar"/>
                        </div>                           
                </form>
            </div>
        </div>
    </div>
</div>


</br></br>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const nextButton = document.querySelector("#carouselExampleControls .carousel-control-next");

        nextButton.addEventListener("click", function() {
            const activeItem = document.querySelector("#carouselExampleControls .carousel-item.active");
            activeItem.classList.remove("active");

            const carouselItems = document.querySelectorAll("#carouselExampleControls .carousel-item");
            const nextItem = activeItem.nextElementSibling || carouselItems[0];
            nextItem.classList.add("active");
        });
    });
</script>