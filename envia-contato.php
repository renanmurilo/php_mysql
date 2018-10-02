<?php 

session_start();
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    require_once("PHPMailerAutoload.php");

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "renanmurilosantosg@gmail.com";
    $mail->Password = "040913rafa";

    $mail->setFrom("renanmurilosantosg@gmail.com", "Renan Murilo");
    $mail->addAddress("renanmurilosantosg@gmail.com");
    $mail->Subject = "Email de contato";
    $mail->msgHTML("<html>de: {$nome}<br>email: {$email}<br>mensagem: {$mensagem}</html>");
    $mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

    if($mail->send()) {
        $_SESSION['success'] = 'Mensagem enviada com sucesso';
        header('location: index.php');
    } else {
        $_SESSION['danger'] = 'Erro ao enviar mensagem'. $mail->ErrorInfo;
        header('location: contato.php');
    }
    die();