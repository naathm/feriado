<?php
require_once('header.php');

if(isset($_GET["login"]) && $_GET["login"] == 1) {
    ?>
    
    <div class="alert alert-success text-center" id="alert" role="alert">Login efetuado com sucesso</div>
    <script>$("#alert").fadeOut(4000);</script>

    <?php
}

if(isset($_GET["login"]) && $_GET["login"] == 2) {
    ?>
    
    <div class="alert alert-warning text-center" id="alert2" role="alert">Você já esta logado, para utilizar outro usuário efetue o logout</div>
    
    <?php
}

require_once('footer.php');
