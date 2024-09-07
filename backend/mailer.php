<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';  // Увери се, че пътят е правилен спрямо структурата на проекта

// Функция за изпращане на имейл за верификация
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
        $mail->addAddress($to);                     // Получател
        $mail->isHTML(true);                        // Имейл формат
        $mail->Subject = 'Email Verification';
        $mail->Body = 'Click on the link below to verify your email: <br><br>' . 
                      '<a href="' . $verification_link . '">Verify Email</a>';
        
        $mail->send();  // Изпращане на имейла

    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Функция за изпращане на имейл за ресетване на парола
function sendResetPasswordEmail($to, $reset_link) {
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
        $mail->addAddress($to);                     // Получател
        $mail->isHTML(true);                        // Имейл формат
        $mail->Subject = 'Password Reset Request';
        $mail->Body = 'Click on the following link to reset your password: <br><br>' . 
                      '<a href="' . $reset_link . '">Reset Password</a>';
        
        $mail->send();  // Изпращане на имейла

    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>
