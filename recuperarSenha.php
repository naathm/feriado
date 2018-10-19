<?php
$chave = "";
if($_GET["chave"]){
    $chave = $_GET["chave"];

?>

<div class="jumbotron">
<div class="container">
<h1>Recuperar Senha</h1>
<form method="post" class="" action="novasenha.php " autocomplete="off">
    <div class="form-group"> 
    <input class="form-control" type="hidden" name="chave" value = "<?php echo $chave?>"/><br/>
  
    <label>E-mail</label><br/>
    <input class="form-control" type="email" name="email"/><br/>
    <label>Senha</label><br/>
    <input type="password" class="form-control" name="senha"/><br/>
    <label>Confirmar Senha</label><br/>
    <input type="password" class="form-control" name="confirmar_senha"/><br/>
       <input  type="submit" class="form-control" name="enviar" value="Cadastrar"/><br/>
    </div> 
</form>
</div>
</div>
<?php
}else{
    echo "<script>alert('Pagina não encontrada');
            window.location.href = 'login.php';
            </script>";
}
require_once('footer.php');