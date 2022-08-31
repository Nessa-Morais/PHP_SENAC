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
            <h1>Cadastro de Usuários</h1>
            <form name="form" method="post" action="incluirUsuario.php">
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="senha" name="senha" required>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="emaiul" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button> 
            </form>           
        </div>

        <?php
    include "../footer.php";
    ?>