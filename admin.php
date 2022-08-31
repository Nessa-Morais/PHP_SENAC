<?php
include "controle.php";
?>
<style>
    img{
        width: 100%;
    }
    .quadro a imag{
            opacity: 0.5;
            width: 50%;
    }
    .quadro a :hover img{
            opacity: 1;
        }
    a{text-decoration: none;
    }

</style>

<div class="container mt-5">
    <div class="row text-venter">
        <div class="col">
            <a href="usuarios.php/listarUsuario.php">
            <img src="img/usuarios.jpeg" alt="Foto do Usuário">
            <p>Usuário</p>
            </a>
        </div>
        <div class="col">
            <a href="alunos.php/listarAlunophp">
            <img src="img/alunos.jpeg" alt="Foto do Aluno">
            <p>Aluno</p>
            </a>
        </div>
        <div class="col">
            <a href="usuarios.php/listarProfessor.php">
            <img src="img/professores.jpeg" alt="Foto do Professor">
            <p>Professor</p>
            </a>
        </div>
    </div>
</div>