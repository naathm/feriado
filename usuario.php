



<p>Gerenciador de usuario</p>

<!-- formulário de cadastro -->

<form action="usuario.php" method="post">
    <label>Gerenciamento de usuario</label>
    <input type="text" name="titulo"/>
    <input type="submit" name="botao_gerenciar" value="Adicionar"/>
</form>



<?php
$usuario = [];
$usuario = _POST["Adicionar usuario"];
echo var_dump ($usuario);

?>
