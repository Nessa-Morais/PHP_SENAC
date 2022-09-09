<?php
include "controle.php";
include "seguranca_adm.php";
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
            <a href="Usuarios/listarUsuario.php">
            <img src="img/usuarios.jpeg" alt="Foto do Usuário">
            <p>Usuário</p>
            </a>
        </div>
        <div class="col">
            <a href="Alunos/listarAluno.php">
            <img src="img/alunos.jpeg" alt="Foto do Aluno">
            <p>Aluno</p>
            </a>
        </div>
        <div class="col">
            <a href="Professores/listarProfessor.php">
            <img src="img/professores.jpeg" alt="Foto do Professor">
            <p>Professor</p>
            </a>
        </div>
    </div>
</div>
<?php
    include "footer.php";
?>