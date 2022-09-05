<?php
//Abrindo conexão com o Banco de dados
include "../conexao.php";
include "../controle.php";
$erro =0;
//tratamento de erro
if (isset($_GET['idAluno'])){
//entrada
    $idAluno= $_GET['idAluno'];
    //processamento buscando o aluno no Banco de Dados
    $sql ="select * from alunos where id =$idAluno";
    $seleciona =mysqli_query($conexao,$sql);
    $exibe =mysqli_fetch_array($seleciona);

//opcional - armazenando o banco de dados em variáveis
    $nome =$exibe['nome'];
    $endereco =$exibe['endereco'];
    $telefone =$exibe['telefone'];
    $email =$exibe['email'];
    $turma =$exibe['turma'];

}
else{
    $erro ++;
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENAC MADUREIRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container bg-info pag">
        <div class="text-end">
            <a href="listarAluno.php"><button type="button" class="btn btn-success btn-sm">Listar Alunos</button></a>

        </div>
        <h2>Aluno</h2>
        <hr>
        <div class="container text-start bg-gradient p-3">
            <?php
            if (!$erro){
                echo "
                    <p> Nome: $nome</p>
                    <p> Id: $idAluno</p>
                    <p> Endereço: $endereco</p>
                    <p> Telefone: $telefone</p>
                    <p> E-mail: $email</p>
                    <p> Turma: $turma</p>
                ";
            }
            else{
                echo "
                <p> Nenhum Aluno foi selecionado! </p>
                <p> Clique em Listar Alunos para selecionar um Aluno
                ";
            }
            ?>
        </div>

        <div class="row">
            <div class="col text-start">
                <a href="listarAluno.php"><button type="button" class="btn btn-warning btn-sm">Voltar</button></a>
            </div>
            <div class="col text-end">
                <a href="editarAluno.php idAluno=<?php echo $idAluno; ?>>"><button type="button" class="btn btn-primary btn-sm">Editar Dados</button></a>
            </div>
        <div>

        </div>
    </div>
    <?php
    include "../footer.php";
    ?>