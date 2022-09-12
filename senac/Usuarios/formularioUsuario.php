<?php
    include "../controle.php";
?>
        <div class="container bg-info pag">    
            <h1>Cadastro de Usuários</h1>
            <form name="form" method="post" action="incluirUsuario.php">
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required>
                </div>                
                <div class="row">
                    <div class="col text-start">
                        <a href="listarUsuario.php"> <button type="button" class="btn btn-warning btn-sm">LISTAR USUÁRIOS</button> </a>
                    </div>
                    <div class="col text-end">
                        <button type="submit" class="btn btn-primary btn-sm botao">CADASTRAR</button></a>
                    </div>
                </div>
            </form>           
        </div>

<?php
    include "../footer.php";
?>
