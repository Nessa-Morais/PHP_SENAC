<?php

    include "conexao.php";

    //tratamento de erro
    if(isset($_GET['idAluno'])){
        //entrada
        $idAluno = $_GET['idAluno'];

        //processamento
        $sql="delete from alunos where id = $idAluno";
        $excluir = mysqli_query($conexao,$sql);

        //saida
        if($excluir){
            echo "
                <script>
                    alert('Aluno excluído com Sucesso!');
                    window.location = 'listarAluno.php';
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
            <p> Clique <a href='listarAluno.php'> aqui </a> para Excluir um aluno. </p>
        ";
    }

?>