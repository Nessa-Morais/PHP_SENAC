<?php

    include "../conexao.php";

    if(isset($_POST['login'])){
        $login= trim($_POST['login']);
        
        //recebendo os arqiovos da imagem
        $nome = $_FILES['foto']['name'];
        $temp = $_FILES['foto']['tmp_name'];
        $caminho = '../fotos/';
        $foto = $caminho.$nome;

        //update de imagem
        $upload = move_uploaded_file($temp,$foto);

        if ($upload){
            $sql = "update usuarios set foto= '$foto' where login= '$login'";
            $alterar = mysqli_query($conexao,$sql);
  
            if ($alterar){
                echo"
                <script>
                alert('Foto alterada com sucesso');
                window.location= 'listarUsuario.php';
                </script>
                ";
            }

            else{
                echo"
                <p> Sietema Temporariamente Fora do Ar. Tente Novamente mais Tarde! </p>
                ";
                echo mysqli_error($conexao);
            }
        }
    }  
    else{
        echo"
        <p> Essa é uma página de tratamento de dados.</P>
        <p> Cloque <a href='listarUsuario.php'>aqui para selecionar um usuário.</p>
        ";
    }
    ?>
