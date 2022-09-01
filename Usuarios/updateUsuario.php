<?php

    include "../conexao.php";

    if(isset($_POST['login'])){
        //entrada - coletar os dados do formulário
        $login = trim($_POST['login']);
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        

        //processamento - incluir no banco de dados
        $sql = "update usuarios set nome = '$nome', email = '$email' where login = '$login'";
        $alterar = mysqli_query($conexao,$sql);

        //saida - feedback ao usuário
        if($alterar){
            echo "
                <script>
                    alert('Usuario Atualizado com sucesso!');
                    window.location = 'listarUsuario.php';
                </script>
            ";
        }
        else{
            echo "
                <p> Sistema temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Sistema. </p>
            ";
            echo mysqli_error($conexao);
        }
    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='listarUsuario.php'>aqui</a> para selecionar um Usuário. </p>
    ";  
    }

?>