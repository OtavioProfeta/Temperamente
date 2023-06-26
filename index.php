<?php
include_once("view/includes/topo.php");
?>

    <div class="container">
        <div class="toast mt-5 align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    No navegador: ative a opção "exibir para computador" para outra 
                    experiência de uso em dispositivos móveis! 
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <h1 class="text-center mt-5 fw-light">Temperamente</h1>
        <div class="row justify-content-center">
              <div class="border-box shadow my-4 bg-light rounded-4 col-lg-8 col-md-8 col-sm-10">
                  <div class="d-flex align-items-center mt-2 justify-content-center">
                        <img src="img/icon_mente.png"> 
                  </div>
                  <p class="fw-light p-3 justify-text">O temperamento é a predisposição emocional e comportamental inata de uma pessoa,
                    que influencia sua forma de reagir e sua sensibilidade em relação ao mundo e a outras pessoas. É
                    algo que carregamos conosco desde o nascimento e não é adquirido posteriormente na infância
                    ou juventude (KÖNIG, 2013).
                  </p>
              </div> 
          </div>
            <div class="text-center mt-2">
                <div class="row row-cols-2">
                    <div class="cyano border-index shadow my-2 col rounded-5 shadow-sm border-caracter" onclick="window.location.href='view/melancolico/main.php?principal'" style="cursor: pointer;">
                        <i class="bi bi-tree fs-1"></i> 
                        <h5 class="fw-light my-3 p-black">MELANCÓLICO</h5>
                    </div>
                    <div class="cyano border-index shadow my-2 col rounded-5 shadow-sm border-caracter" onclick="window.location.href='view/colerico/main.php?principal'" style="cursor: pointer;">
                        <i class="bi bi-fire fs-1"></i> 
                        <h5 class="fw-light my-3 p-black">COLÉRICO</h5>
                    </div>
                    <div class="cyano border-index shadow my-2 col rounded-5 shadow-sm border-caracter" onclick="window.location.href='view/fleumatico/main.php?principal'" style="cursor: pointer;">
                        <i class="bi bi-water fs-1"></i> 
                        <h5 class="fw-light my-3 p-black">FLEUMÁTICO</h5>
                    </div>
                    <div class="cyano border-index shadow my-2 col rounded-5 shadow-sm border-caracter" onclick="window.location.href='view/sanguineo/main.php?principal'" style="cursor: pointer;">
                        <i class="bi bi-cloud-haze2 fs-1"></i> 
                        <h5 class="fw-light my-3 p-black">SANGUÍNEO</h5>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center fw-light mt-5">Descubra o seu temperamento:</h5>
        <form action="view/quiz.php" style="overflow: hidden">                 
            <input class="position-absolute mt-4 start-50 translate-middle bi bi-caret-down-fill entrar" type="submit" value="Iniciar quiz">
        </form>    
    </div>
    </br></br></br></br>

    <script>
    // Faz com que a toast apareça sempre que recarreagar a página
    document.addEventListener("DOMContentLoaded", function() {
      var toastElement = document.querySelector(".toast");
      var toast = new bootstrap.Toast(toastElement);
      toast.show();
    });
  </script>
    
<?php
include_once("view/includes/rodape.php");
?>