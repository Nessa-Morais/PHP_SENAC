<?php
    include "../conexao.php";
    include "../controle.php";
    $erro = 0;
    if(isset($_GET['loginUsuario'])){
        $idAluno = $_GET['loginUsuario'];

        $sql = "select * from alunos where id = $idAluno";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);

        $nome = $exibe['nome'];
        $login = $exibe['login'];
        $senha = $exibe['senha'];
        $email = $exibe['email'];

    }
    else{
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
            <h1>Editar dados do Usuários</h1>
            <hr>
            <?php
                if ($erro){
                    echo "
                    <p class='p-5'>
                        Nenhum Usuário foi selecionado. Clique no botão voltar para selecionar o aluno que deseja editar.
                    </p>
                    ";
                }
                else{
                
            ?>

            <form name="form" method="post" action="updatUsuario.php">
                <div class="mb-3">
                    <label for="nome" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login" value="<?php echo $login?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" value="<?php echo $email?>" required>
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">Senha'</label>
                    <input type="text" class="form-control" id="senha" name="senha" value="<?php echo $senha?>" required>
                </div>

                <?php
                    }
                ?>

                <div class="row">
                    <div class="col text-start">
                        <a href="listarUsuario.php"><button type="button" class="btn btn-warning btn-sm"> Voltar </button></a>
                    </div>
                    <div class="col text-end">
                        <button type="submit" class="btn btn-primary btn-sm"> ALTERAR DADOS </button></a>
                    </div>
                </div>
            </div> 
            </form>           
        </div>

        <?php
    include "../footer.php";
    ?>