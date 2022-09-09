<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENAC MADUREIRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container-fluid bg-dark text-white p-3">
        <div class="row">
            <div class="col text-start">
                SENAC MADUREIRA
            </div>
            <div class="col text-end link">
               <?php
               if(!isset($_SESSION)){
                   session_start();
               }
               if(isset($_SESSION['login'])){
                   $login= $_SESSION['login'];
                   $nome= $_SESSION['nome'];
                   $foto= $_SESSION['foto'];

                   echo "Bem vindo, $nome | <a href= '\senac\logout.php'> Logout </a>";
               }
               else{
                   echo"
                   <a href= '\senac/login.php'> Login </a> |
                   <a href= '\senac/usuarios/formularioUsuario.php'> Não possuo Cadastro </a>
                   ";
               }

               ?>
            </div>

        </div>
    </div>