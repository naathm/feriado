<?php
    error_reporting(E_ALL);
    require_once('session.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Academia Magento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <style>
        body {
            margin:0;
            padding:0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="usuarios.php">Usuários</a>
            </li>
            <li class="nav-item active">
                    <a class="nav-link" href="tarefas.php">Tarefas</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="cadastro.php">Cadastrar</a>
            </li>
            <?php

            if(isset($_SESSION['logado'])) {
                ?>
                <li class="nav-item active right-align">
                <a class="nav-link" href="logout.php">logout</a>
            </li>

            <?php
                }
            ?>
        </ul>
    </nav>


 