<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Jobhunt\vendor\autoload.php';  // Увери се, че пътят е правилен спрямо структурата на проекта

function sendVerificationEmail($to, $verification_link) {
    $mail = new PHPMailer(true);

    try {
        // Настройки за SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // SMTP сървър на Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'jobhunt.bg@gmail.com';  // Твоят Gmail акаунт
        $mail->Password = 'foyt tqyb qpbq idaj';     // Приложна парола
        $mail->SMTPSecure = 'tls';                 // TLS криптиране
        $mail->Port = 587;                         // Порт за TLS

        // Имейл съдържание
        $mail->setFrom('jobhunt.bg@gmail.com', 'JobHunt');
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = 'Email Verification';
        $mail->Body = 'Click on the link below to verify your email: <br><br>' . 
                      '<a href="' . $verification_link . '">Verify Email</a>';
        
        $mail->send();

    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
