<?php
include "../conexao.php";
include "../controle.php";

if (isset($_GET['login'])) {
    $login = $_GET['login'];
    $sql = "select * from usuarios where login = '$login'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);
}
?>

<div class="container bg-info pag">
    <h1>Alterar Foto</h1>
    <div class="row">
        <div class="col-2">
        </div>
            <div class="col-8">
                <form name="form" method="post" action="updateFoto.php" enctype="multipart/form-data">
                    <input type="hidden" name="login" value="<?php echo $login ?>">
                    <div class="form-group">
                        <input type="file" id="foto" name="foto">
                    </div>
                    <div class="row mt-5">
                        <div class=" col text-start mt-5">
                            <button type="button" class="btn btn-warning btn-sm" onclick="window.history.go(-1)">VOLTAR</button>
                        </div>
                    </div>
                    <div class="col text-end mt-5">
                        <button type="submit" class="btn btn-primary botao">ENVIAR FOTO</button>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>

    </div>
</div>

<?php
    include "../footer.php";
?>