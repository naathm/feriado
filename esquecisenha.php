

<div class="jumbotron">
<div class="container">
<h1>Recuperar Senha</h1>
<form method="post" class="" action="envianovasenha.php " >
    <div class="form-group"> 
    <label for="email">Informe seu e-mail</label>
    <input class="form-control" type="email" name="email"/><br/>
        <input  type="submit" class="form-control" name="enviar_email" value="Enviar" /><br/>
    </div> 
</form>
</div>
</div>
<?php
require_once('footer.php');
