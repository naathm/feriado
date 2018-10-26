<?php

error_reporting(E_ALL);
require_once('session.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        body {
            padding-top: 3.5em;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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


 