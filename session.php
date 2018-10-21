<?php
session_start();

$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$login_page = 'localhost/feriado/login.php';
$login_page_error1 = 'localhost/feriado/login.php?erro=154';
$login_page_error2 = 'localhost/feriado/login.php?erro=171';
$cadastro_page = 'localhost/feriado/cadastro.php';

$exception_array = array($login_page,$cadastro_page);
$login_page_errors = array($login_page_error1,$login_page_error2);
$array_merged = array_merge($exception_array, $login_page_errors);


if(!isset($_SESSION['logado']) && !in_array($host,$array_merged)) {
    header('location:login.php?erro=154');
}

if (isset($_SESSION['logado']) && $host == $login_page) {
    header('location:index.php?login=2');
}
?>