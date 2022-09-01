<?php
    include "../conexao.php";
    include "../controle.php";

    if(isset($_GET['login'])){

        $login = $_GET['login'];
        
        $sql = "select * from usuarios where login = '$login'";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);

        $senha = $exibe['senha'];
        $nome = $exibe['nome'];
        $email = $exibe['email'];
        $nivel = $exibe['nivel'];
        $foto = $exibe['foto'];

    
?>
    <div class="container bg-info pag">
        <div class="text-end">
            <a href="listarUsuario.php"> <button type="button" class="btn btn-success btn-sm">LISTAR USUÁRIOS</button> </a>
        </div>
        <h2>Usuário: <?php echo $nome; ?></h2>
        <hr>
        <div class="container text-start bg-gradient p-3">
            <div class="row">
                <div class="col-2 text-center">
                    <img src="<?php echo $foto?>">
                    <p> <a href="editarFoto.php?login=<?php echo $login; ?>">Editar Foto </a></p>
                </div>
                <div class="col-10">
                    <?php
                        echo "
                            <p> Login: $login </p>
                            <p> Senha: $senha </p>                    
                            <p> Email: $email </p>
                            <p> Nível: $nivel </p>                                       
                        ";
                    ?>  
                </div>
            </div>                
                     
        </div>
        <div class="row">
            <div class="col text-start">
                <a href="listarUsuario.php"> <button type="button" class="btn btn-warning btn-sm">VOLTAR</button> </a>
            </div>
            <div class="col text-end">
                <a href="editarUsuario.php?login=<?php echo $login ?>"><button type="button" class="btn btn-primary btn-sm botao">EDITAR DADOS</button></a>
            </div>
        </div>
    </div>   

<?php

    }
    else{
        echo "
            <p> Esta é uma página de tratamento de dados. </p>
            <p> Clique <a href='listarUsuario.php'>aqui</a> para selecionar um Usuário. </p>
        ";   
    }
?>

<?php
    include "../footer.php";
?>
   