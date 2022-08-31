<?php


include "../conexao.php";
if(isset($_POST['loginUsuario'])){
    $loginUsuario = trim($_POST['loginUsuario']);
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    

    $sql= "update usurios set nome= '$nome', email= '$email', login= '$login', senha= '$senha' where id= $loginUsuario";
    $alterar= mysqli_query($conexao,$sql);


    if($alterar){
        echo "
        <script>
        alert('Usuário Atualizado com Sucesso!');
        window.location= 'listarUsuario.php';
        </script>
        ";
    }
    else{
        echo "
        <p> Sistema temporariamente fora do ar. Tente novamente mais tarde!</p>
        <p> Entre em contato com a Administrador do site.</p>
        ";
        echo mysqli_error($conexao);
    }
}
    else{
        echo"
        <p> Esta é uma página de tratamento de dados.</>
        <p> Clique em <a href= 'listarUsuario.php'> aqui </a> para selecionar um Usuário.</p>
        ";
    }


?>