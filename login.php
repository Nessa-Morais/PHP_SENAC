<?php
include "controle.php";
?>

<link rel="stylesheet" href="css/style.css">
<div class="container  mt-5 text-center">
    <h1>Área de Login</h1>
    <hr>
    <div class="row bg-info pag">
        <form name="form" method="post" action="#">
            <div class="mb-3">
                <label for="login" class="form-label" name="login" required> Login </label>
                <input type="text" class="form-control" id="text" name="login" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label" name="senha" required> Senha </label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn btn-primary">Ok</button>
            <p>
                <a href="usuarios/formularioUsuario.php">Não possuo Cadastro</a>
            </p>
        </form>
        <div class="text-center text-danger">
            <?php include "valida.php"
            ?>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>