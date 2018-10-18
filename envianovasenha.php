<?php
session_start();
require_once('classes/usuario.php');

$email = $_POST["email"];

$user = new Usuario();
$chave = $user->chave_acesso($email);

if($chave) {
    echo '<a href="http://localhost/feriado/recuperarSenha.php?chave='.$chave.'">http://localhost/feriado/recuperarSenha.php?chave='.$chave.'</a>';
    
}else{
        echo "<script>alert('Email não cadastrado');</script>";

}   
?>