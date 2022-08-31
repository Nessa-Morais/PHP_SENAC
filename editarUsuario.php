<?php

include "conexao.php";

$erro = 0;

if (isset($_GET['idusuario'])) {
    $idusuario = $_GET['idusuario'];

    $sql = "select * from usuarios where id= $idusuario";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);

    $nome =$exibe['nome'];
    $login =$exibe['login'];
    $senha =$exibe['senha'];
    $email =$exibe['email'];
} else {
    $erro++;
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENAC MADUREIRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container bg-info pag">
        <h1>Editar Usuários</h1>
        <hr>
        <?php
        if($erro){
            echo"
            <p class = 'p-5'
            Nenhum usuario foi selecionado. Clique no botão Voltar para selecionar o professor que deseja editar.
            </p>
            ";
        }
        else{

        }
        ?>
        <form name="form" method="post" action="updateUsuario.php">
            <input type="hidden" name="login" value="<?php echo $login ?>" required>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" value="<?php echo $email ?> " required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="text" class="form-control" id="senha" name="senha" value="<?php echo $senha ?>" required>
            </div>
            <div class="mb-3">
                <label for="loginUsuario" class="form-label">Login</label>
                <input type="text" class="form-control" id="loginUsuario" name="login\usuario" value="<?php echo $loginUsuario ?>"  disabled required>
            </div>
            <div class="row">
                <div class="col text-start">
                    <a href="listarUsuario.php"><button type="button" class="btn btn-warning btn-sm">Voltar</button></a>
                </div>
                <div class="col text-end">
                    <button type="submit" class="btn btn-primary btn-sm">Alterar Dados</button></a>
                </div>
                <div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>