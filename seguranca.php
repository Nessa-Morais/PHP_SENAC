<?php
if(!isset($_SESSION)){
    session_start();
}
    if(!isset($_SESSION['login'])){
        echo "
            <script>
                alert('Área Restrita à Usuários Logados! Informe seu Login e Senha');
                window.location= '../login.php';
            </script>
        ";
    }
?>