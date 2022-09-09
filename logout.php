<?php
session_start();
$_SESSION= array(); //carrega o array de dados
session_destroy(); //destroi todas as sessões iniciadas
header('location: \senac\index.php'); //redireciona para a área de login

?>