<?php
session_start();
require_once('classes/usuario.php');

$email = $_POST["email"];

$user = new Usuario();
$chave = $user->chave_acesso($email);

if($chave) {
 
    require_once("classes/class.phpmailer.php");
     
    $mail = new PHPMailer(true);
     
    $mail->IsSMTP();
     
    try {
         $mail->Host = 'smtp.gmail.com'; 
         $mail->SMTPAuth   = true;  
         $mail->SMTPSecure = 'tls';
         $mail->Port       = 587; 
         $mail->Username = 'acadmag@gmail.com'; 
         $mail->Password = 'phprs@root'; 
     
         $mail->SetFrom('acadmag@gmail.com', 'Academia Magento'); 
         $mail->AddReplyTo('acadmag@gmail.com', 'Academia Magento'); 
         $mail->Subject = 'Redefinição de senha';
     
         $mail->AddAddress($email);
     
         $mail->MsgHTML ('<a href="http://localhost/feriado/recuperarSenha.php?chave='.$chave.'">http://localhost/feriado/recuperarSenha.php?chave='.$chave.'</a>');
     
         $mail->Send();
         echo "<script>alert('Foi enviado um email para redefinição de senha');
         window.location.href = 'login.php';
         </script>";
     
        }catch (phpmailerException $e) {
          echo $e->errorMessage(); 
    }
    
   
}else{
        echo "<script>alert('Email não cadastrado');
        window.location.href = 'esquecisenha.php';
        </script>";

}   
?>