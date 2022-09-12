<?php

    include "../conexao.php";

    if(isset($_POST['nome'])){
        //entrada - coletar os dados do formulário
        $login = trim($_POST['login']);
        $senha = trim($_POST['senha']);
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $nivel = 'usu';
        $foto = '../fotos/semfoto.jfif';
        
        //processamento - incluir no banco de dados
        $sql = "insert into usuarios(login,senha,nome,email,nivel,foto) values('$login','$senha','$nome','$email','$nivel','$foto')";
        $incluir = mysqli_query($conexao,$sql);

        //saida - feedback ao usuário
        if($incluir){
            echo "
                <script>
                    alert('Usuário cadastrado com sucesso!');
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
        <p> Clique <a href='formularioUsuario.php'>aqui</a> para incluir um Usuário. </p>
    ";  
    }

?>