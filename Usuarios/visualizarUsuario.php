<?php

    include "../conexao.php";
    include "../controle.php";

    if(isset($_POST['nome'])){
        //entrada - coletar os dados do formulário
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $login = trim($_POST['login']);
       

        //processamento - incluir no banco de dados
        $sql = "insert into alunos(nome,email,endereco,telefone,turma) values('$nome','$email','$senha','$login')";
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
        <p> Clique <a href='formulariUsuario.php'>aqui</a> para incluir um usuário. </p>
    ";  
    }

?>
 </div>

<div class="row">
    <div class="col text-start">
        <a href="listarUsuario.php"><button type="button" class="btn btn-warning btn-sm">Voltar</button></a>
    </div>
    <div class="col text-end">
        <a href="editarUsuario.php"><button type="button" class="btn btn-primary btn-sm">Editar Dados</button></a>
    </div>
<div>

</div>
</div>
<?php
include "../footer.php";
?>