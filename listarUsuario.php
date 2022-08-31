<?php
include "conexao.php";
$sql = "select * from alunos order by nome";
$seleciona = mysqli_query($conexao, $sql);
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENAC MADUREIRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container bg-info pag">
        <div class="text-end">
            <a href="formularioUsuario.php">
                <button type="button" class="btn btn-success btn-sm">CADASTRAR NOVO ALUNO </button>
            </a>
        </div>
        <h2>Lista de Usuários</h2>
        <div class="container text-center">
            <div class="row bg-dark text-light p-2">
                <div class="col-2">
                    LOGIN
                </div>
                <div class="col-2">
                    NOME
                </div>
                <div class="col-3">
                    E-MAIL
                </div>
                <div class="col-1">
                    SENHA
                </div>
            </div>
            <?php
            while ($exibe = mysqli_fetch_array($seleciona)) {
                $idpROFESSOR = $exibe['id'];
            ?>
                <div class="row p-1 bg-white bg-gradient bg-opacity-50">
                    <div class="col-1">
                        <?php echo $exibe['id']; ?>
                    </div>
                    <div class="col-2">
                        <?php echo $exibe['nome']; ?>
                    </div>
                    <div class="col-3">
                        <?php echo $exibe['email']; ?>
                    </div>
                    <div class="col-2">
                        <?php echo $exibe['telefone']; ?>
                    </div>
                    <div class="col-1">
                        <?php echo $exibe['turma']; ?>
                    </div>
                    <div class="col-3">
                        <a href="visualizarpROFESSOR.php?idpROFESSOR=<?php echo $idpROFESSOR; ?>"><button type="button" class="btn btn-success btn-sm">Visualizar</button></a>
                        <a href="editarpROFESSOR.php?idpROFESSOR=<?php echo $idpROFESSOR; ?>"><button type="button" class="btn btn-primary btn-sm">Editar</button></a>
                        <a href="excluirpROFESSOR.php?idpROFESSOR=<?php echo $idpROFESSOR; ?>" onclick="return confirm('Confirma a Exclusão do pROFESSOR?')">
                            <button type="button" class="btn btn-danger btn-sm">Excluir</button>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>