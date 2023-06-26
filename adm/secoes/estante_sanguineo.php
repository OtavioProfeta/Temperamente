<?php
?>


        <div class="container p-4">
            <h2 class="my-4">Estante do Sanguíneo</h2>

            <table class="table table-bordered">
            <tr class="table-dark">
                <th>Id</th>
                <th>Músicas</th>
                <th>Livros</th>
                <th>Profissões</th>
                <th>Hobbies</th>
                <th>Filmes</th>
                <th>Séries</th>
                <th>Autor</th>
                <th>Excluir</th>
            </tr>

            <?php
            $busca = new manipuladados();
            $busca->setTable("tb_sanguineo");
            $resultado = $busca->getAllDataTable();
            $estante = $busca->getAllDataTable();
            foreach ($estante as $dados) {
            ?>

                <form action="secoes/verificarS.php" method="post" name="formulario">
                    <tr>
                        <td><?= $dados["id"]; ?></td>
                        <td><?= $dados["musicas"]; ?></td>
                        <td><?= $dados["livros"]; ?></td>
                        <td><?= $dados["profissoes"]; ?></td>
                        <td><?= $dados["hobbies"]; ?></td>
                        <td><?= $dados["filmes"]; ?></td>
                        <td><?= $dados["series"]; ?></td>
                        <td><?= $dados["autor"]; ?></td>

                        <input type="hidden" name="id" value="<?= $dados["id"]; ?>"/>
                        <input type="hidden" name="musicas" value="<?= $dados["musicas"]; ?>"/>
                        <input type="hidden" name="livros" value="<?= $dados["livros"]; ?>"/>
                        <input type="hidden" name="profissoes" value="<?= $dados["profissoes"]; ?>"/>
                        <input type="hidden" name="hobbies" value="<?= $dados["hobbies"]; ?>"/>
                        <input type="hidden" name="filmes" value="<?= $dados["filmes"]; ?>"/>
                        <input type="hidden" name="series" value="<?= $dados["series"]; ?>"/>
                        <input type="hidden" name="autor" value="<?= $dados["autor"]; ?>"/>

                        <td><button class="btn btn-danger" type="submit" name="botao" value="excluir">Excluir</button></td>
                    </tr>
                </form>

            <?php }  ?>

            </table>
            <br><br>
        </div>
