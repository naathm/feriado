<?php
session_start();

$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$server_name = $_SERVER['SERVER_NAME'];
$dirname = dirname(__FILE__);
$folder_name = substr_replace($dirname,'',0,14);

$login_page = 'login.php';
$login_page_error_154 = 'login.php?erro=154';
$login_page_error_171 = 'login.php?erro=171';
$cadastro_page = 'cadastro.php';

$login_page_path = $server_name . "/" . $folder_name . "/" . $login_page;
$login_page_error_154_path = $server_name . "/" . $folder_name . "/" . $login_page_error_154;
$login_page_error_171_path = $server_name . "/" . $folder_name . "/" . $login_page_error_171;
$cadastro_page_path = $server_name . "/" . $folder_name . "/" . $cadastro_page;

$exception_array = array($login_page_path,$cadastro_page_path);
$login_page_errors = array($login_page_error_154_path,$login_page_error_171_path);
$array_merged = array_merge($exception_array, $login_page_errors);


if(!isset($_SESSION['logado']) && !in_array($host,$array_merged)) {
    header('location:login.php?erro=154');
}

if (isset($_SESSION['logado']) && $host == $login_page_path) {
    header('location:index.php?login=2');
}
?>