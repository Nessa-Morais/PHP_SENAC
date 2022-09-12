<?php
    include "conexao.php";
    if (isset($_POST['login'])){
        $login = trim($_POST['login']);
        $senha = trim($_POST['senha']);

        $sql= "select *from usuarios where login= '$login' and senha= '$senha'";
        $testeLogin= mysqli_query($conexao, $sql);
        $existe= mysqli_num_rows($testeLogin);

        if($existe){
            $dados= mysqli_fetch_array($testeLogin);
            $nome= $dados['nome'];
            $nivel= $dados['nivel'];
            $email= $dados['email'];
            $foto= $dados['foto'];

            if(!isset($_SESSION)){
            session_start();
            }
            $_SESSION['login']= $login;
            $_SESSION['nome']= $nome;
            $_SESSION['email']= $email;
            $_SESSION['nivel']= $nivel;
            $_SESSION['foto']= $foto;
            
            if ($nivel== 'adm'){
                header('location: admin.php');
            }
            else {
                header('location: index.php');
            }
        }
            else{
                echo "Usuário e Senha Inválidos!";
            }
        }
   
?>
