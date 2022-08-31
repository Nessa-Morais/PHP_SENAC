<?php

    include "../conexao.php";

    //tratamento de erro
    if(isset($_GET['loginUsuario'])){
        //entrada
        $loginUsuario = $_GET['loginUsuario'];

        //processamento
        $sql="delete from alunos where id = $loginUsuario";
        $excluir = mysqli_query($conexao,$sql);

        //saida
        if($excluir){
            echo "
                <script>
                    alert('Usuário excluído com Sucesso!');
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
            <p> Clique <a href='listarUsuario.php'> aqui </a> para Excluir um usuário. </p>
        ";
    }

?>