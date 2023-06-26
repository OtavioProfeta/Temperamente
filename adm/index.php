<?php?>
<!DOCTYPE html>
<html lang="pt">
<?php include ("includes/topo.php"); ?>

<body style="background-color:#222;">
    <div class="container">
        <div class="row justify-content-center align-items-center"  style="background-color:#222;">
            <div class="bg-secondary my-5 p-4 rounded-5 col-12 col-sm-8 col-md-6">
                <form method="post" action="login.php" class="login" style="overflow: hidden">
                    <div class="form-group ">
                        <h2>LOGIN ADMIN:</h2>
                        <br>
                        <label class="form-label">Nome:</label>
                        <input type="text" name="txtNome" placeholder="Informe o seu nome:" class="form-control" required />
                        <br>
                        <label class="form-label">Senha:</label>
                        <input type="password" name="txtSenha" placeholder="Informe a senha:" class="form-control" required />
                        <div class="my-4">
                            <input class="btn btn-info" type="reset" value="Limpar" class="limpar">
                            <input class="btn btn-success" type="submit" value="Entrar" class="entrar">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    
<footer>
<?php include ("includes/rodape.php"); ?>
</footer>