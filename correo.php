<?php

if(isset($_POST['send_email'])){
    
    include 'PHPMailerAutoload.php';
    include 'class.smtp.php';
    include 'class.phpmailer.php';
  
        $mail = new PHPMailer;
     $mail -> isSMTP();
     $mail -> Host='smtp.gmail.com';
     $mail -> Port=587;
     $mail ->SMTPAuth=true;
     $mail ->SMTPSecure='tls';
     $mail ->Username='amatertester@gmail.com';
     $mail ->Password='Caldas1998.';

     $mail->setFrom($_POST['email'],$_POST['firstname']);
     $mail->addAddress('amatertester@gmail.com');
     $mail->addReplyTo($_POST['email']);

     //mensaje a enviar
     
     $mail->isHTML(true);
     $mail->Subject='Enviado por:'.$_POST['firstname'];
     $mail->Body='<h1 align center>Nombre: '.$_POST['firstname'].
     '<br>Email: '.$_POST['email'].'<br>Celular: '.
     $_POST['mobile'].'<br>Tipo: '.$_POST['tipo'].
     '<br>Mensaje: '.$_POST['lane'].'</h1>';

     if(!$mail->send()){
         $result="algo esta mal, intentelo nuevamente";
     }
     else{
         $result="Gracias ".$_POST['nombre']."por contactarnos, espera nuestro mensaje";
     }
     

}
?>