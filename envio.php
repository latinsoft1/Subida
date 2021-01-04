<?php
    $result = "";

    if(isset($_POST['submit'])){
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=True;
        $mail->SMTPSecure='tls';
        $mail->Usernamer='infoguatajiagua@gmail.com';
        $mail->password='guatajiagua2021';

        $mail->setFrom($_POST['email'],$_POST['nombre']);
        $mail->addAddress('infoguatajiagua@gmail.com');
        $mail->addReplyTo($_POST['email'],$_POST['nombre']);

        $mail->isHTML(true);
        $mail->Subject="Enviado por: " .$_POST['nombre'];
        $mail->Body='<p align=justify>Nombre: '.$_POST['nombre'].'<br>Email: ' .$_POST['email']. 
        '<br>Mensaje: '.$_POST['mensaje'].'</p>';

        if(!$mail->send()){
            $result="Algo Esta mal, intentelo más tarde";}
        
        else
        {
            $result="Mensaje enviado... Que tenga un buen dia".$_POST['nombre'].;
        }
    }
?>
