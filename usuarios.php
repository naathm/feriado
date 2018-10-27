<?php
    require_once('header.php');
    require_once('classes/usuario.php');
?>

<div class="jumbotron">
        
    <?php 

        if(isset($_POST['editar_usuario'])){

            $id_usuario = $_POST["id_usuario"];
            $senha = $_POST["senha"];

            if($id_usuario!='' && $senha != '') {
            
                $user = new Usuario();
                $cadastro_valido = $user->Editar_usuario($id_usuario, $senha);

                if($cadastro_valido){
                    echo "<script> alert('Alteração realizada com sucesso!'); window.open('usuarios.php','_self')</script>";
                    
                }else{
                        echo "Algo deu errado";
                }        
            }
        }   
        
        if(isset($_GET['acao']) && $_GET['acao'] == 'excluir'){

            $id_usuario = $_GET['id'];

            if($id_usuario!='') {
            
                $user = new Usuario();
                $excluirUsuario = $user->excluir($id_usuario);

                if($excluirUsuario){
                    echo "<script> alert('Usuário foi apagado'); window.open('usuarios.php','_self')</script>";                    
                }     
            }
        }    
    ?> 

<div class="container">
        <h4>
            Usuários cadastrados
        </h4>
    <?php
        $where ="";
        if(isset($_GET['email_usu']) && $_GET['email_usu'] != ""){$where = " WHERE id != '' and email LIKE '%".$_GET['email_usu']."%'";}

        $usuario = new Usuario();
        $usuarios = $usuario->getAllUsuarios($where);

        if(!isset($usuarios)){
            echo "Sem usuarios cadastradas";
        }  
        else{
        ?>

       <div id="busca" class="form-inline">

        	<strong>Digite total ou parte E-mail: </strong> 
            <input type="text" id="busca_email" class="form-control" />
            <button class="btn btn-primary" onClick="javascript:window.open('usuarios.php?email_usu='+$('#busca_email').val(),'_self')">BUSCAR</button> 

            <?php if($_GET): ?>
                <a href="usuarios.php" target="_self"> <strong> Limpar filtro</strong></a>
            <?php endif;?> 
        </div>

            <table class='table table-borderless table-hover'>
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Log</th>
                        
                        <?php 
                        
                        if(permissao_usuario() === "administrador"){
                            echo "<th>Editar</th>
                            <th>Excluir</th>";
                            }
                        ?>
                       
                    </tr>
                </thead>
                <tbody class="table-striped">

                <?php
                    
                    if($usuarios){
    
                        foreach ($usuarios as $valor){
                            
                            echo "<tr>
                                    <td>".$valor["id"]."</td>
                                    <td>".$valor['email']."</td>
                                    <td>".$valor['status']."</td>
                                    <td>".$valor['log']."</td>";  

                                    if(permissao_usuario() === "administrador"){
                                        echo "<td><a href='usuarios.php?id={$valor["id"]}&edit=1'>Editar</a></td>
                                        <td><a href='usuarios.php?id={$valor["id"]}&acao=excluir'>Excluir</a></td>";
                                    }

                            echo"</tr>";
                        }
                    }else{
                        echo "<p>Nenhum usuário encontrado</p>";
                    }
                ?>

            <?php
                $database = new Database();
                if(isset($_GET['edit'])&& $_GET['edit']==1){
                $sql = "SELECT * FROM usuario where id = {$_GET['id']}";
                $result = $database->executar($sql);
                $user = $result->fetch_assoc();
            ?>

            <form action="usuarios.php" method="post" target="_self">
                <table>
                    <h2> Editar Senha</h2>
                    <tr>
                        <td>
                            <input  type="hidden" value=<?=$user['id'];?> name='id_usuario' />
                            <label>E-mail</label>
                            <label><?=$user['email'];?></label>
                        </td>
                    </tr>

                    <tr>
                        <td>

                            <label>Senha</label>
                            <input type="password" name="senha" />

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="editar_usuario" value="Salvar" />
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                } 
            }
            ?>
       
            </tbody>
        </table>
    </div>
</div>

<?php require_once('footer.php');?>