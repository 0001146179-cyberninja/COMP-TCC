<?php

session_start();

$_SESSION['msg'] = "";
$_SESSION['type'] = "";
$_SESSION['login'] = false;

//Informações do usuário

$_SESSION['perfil'] = "";

$_SESSION['nome'] = "";
$_SESSION['telefone'] = "";
$_SESSION['email'] = "";
$_SESSION['cpf'] = "";
$_SESSION['cnpj'] = "";
$_SESSION['data_criacao'] = "";
$_SESSION['data_atualizacao'] = "";

header("Location: pages/index.php");

?>