<?php

include "../conexao.php";
include "../controle.php";

$erro = 0;

if (isset($_GET['idAluno'])) {
    $idAluno = $_GET['idAluno'];

    $sql = "select * from alunos where id= $idAluno";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);

     $nome =$exibe['nome'];
    $endereco =$exibe['endereco'];
    $telefone =$exibe['telefone'];
    $email =$exibe['email'];
    $turma =$exibe['turma'];
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
        <h1>Editar Alunos</h1>
        <hr>
        <?php
        if($erro){
            echo"
            <p class = 'p-5'
            Nenhum Aluno foi selecionado. Clique no botão Voltar para selecionar o aluno que deseja editar.
            </p>
            ";
        }
        else{

        }
        ?>
        <form name="form" method="post" action="updateAluno.php">
            <input type="hidden" name="idAluno" value="<?php echo $idAluno ?>" required>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome ?>" required>
            </div>
            <div class="mb-3">
                <label for="idAluno" class="form-label">Id</label>
                <input type="text" class="form-control" id="idAluno" name="idAluno" value="<?php echo $idAluno ?>"  disabled required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" value="<?php echo $email ?> " required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $endereco ?>" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone ?> ">
            </div>
            <div class="mb-3">
                <label for="turma" class="form-label">Turma</label>
                <input type="text" class="form-control" id="turma" name="turma" maxlength="4" value="<?php echo $turma ?> " required>
            </div>
            <div class="row">
                <div class="col text-start">
                    <a href="listarAluno.php"><button type="button" class="btn btn-warning btn-sm">Voltar</button></a>
                </div>
                <div class="col text-end">
                    <button type="submit" class="btn btn-primary btn-sm">Alterar Dados</button></a>
                </div>
                <div>
        </form>
    </div>

    <?php
    include "../footer.php";
    ?>