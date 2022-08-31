<?php

    include "../conexao.php";

    if(isset($_POST['nome'])){
        //entrada - coletar os dados do formulário
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $endereco = trim($_POST['endereco']);
        $telefone = trim($_POST['telefone']);
        $turma = trim($_POST['turma']);

        //processamento - incluir no banco de dados
        $sql = "insert into professores(nome,email,endereco,telefone,turma) values('$nome','$email','$endereco','$telefone','$turma')";
        $incluir = mysqli_query($conexao,$sql);

        //saida - feedback ao usuário
        if($incluir){
            echo "
                <script>
                    alert('Usuário cadastrado com sucesso!');
                    window.location = 'listarProfessor.php';
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
        <p> Clique <a href='formularioProfessor.php'>aqui</a> para incluir um professor. </p>
    ";  
    }

?>