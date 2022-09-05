<?php
    include "../conexao.php";

    if(isset($_GET['login'])){

        $login = $_GET['login'];
        
        $sql = "delete from usuarios where login = '$login'";
        $excluir = mysqli_query($conexao,$sql);

        //saida - feedback ao usuário
        if($excluir){
            echo "
                <script>
                    alert('Usuário exluido com Sucesso');
                    window.location = 'listarUsuario.php';
                </script>
            ";
            //header("location: listarAluno.php");
        }
        else{
            echo "
                <p> Bando de Dados temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Site ... </p>
            ";
            echo mysqli_error($conexao);
        }
    }

    
?>