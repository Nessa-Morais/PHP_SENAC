<?php


include "../conexao.php";
if(isset($_POST['idProfessor'])){
    $idProfessor = trim($_POST['idProfessor']);
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $endereco = trim($_POST['endereco']);
    $telefone = trim($_POST['telefone']);
    $turma = trim($_POST['turma']);
    

    $sql= "update Professores set nome= '$nome', email= '$email', telefone= '$telefone', turma= '$turma' where id= $idProfessor";
    $alterar= mysqli_query($conexao,$sql);


    if($alterar){
        echo "
        <script>
        alert('Professor Atualizado com Sucesso!');
        window.location= 'listarProfessor.php';
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
        <p> Clique em <a href= 'listarProfessor.php'> aqui </a> para selecionar um Professor.</p>
        ";
    }


?>