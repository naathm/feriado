<?php
session_start();
require_once('classes/usuario.php');

$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmar_senha = $_POST["confirmar_senha"];
$chave = $_POST["chave"];
$id = $_GET['id'];

$user = new Usuario();
$checkchave = $user->check_chave($email,$chave);

if($checkchave) {
    
    $alterarsenha = $user->Editar_usuario($senha,$checkchave);
    echo "<script>alert('Senha alterada com sucesso');
            window.location.href = 'login.php';
            </script>";
}else{
    echo "<script>alert('Usuario não encontrado');</script>";
}   
?>