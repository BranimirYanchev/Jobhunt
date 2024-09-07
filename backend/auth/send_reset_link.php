<?php
require_once '../db.php';
require_once '../mailer.php';  // За изпращане на имейли

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Проверка дали имейлът съществува в базата данни
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        // Генериране на токен за ресетване на паролата
        $reset_token = bin2hex(random_bytes(50));
        $expires_at = date("Y-m-d H:i:s", strtotime('+1 hour')); // Валиден за 1 час

        // Записване на токена в базата данни
        $stmt = $pdo->prepare("UPDATE users SET reset_token = ?, reset_token_expires = ? WHERE email = ?");
        $stmt->execute([$reset_token, $expires_at, $email]);

        // Изпращане на имейл за ресетване на паролата
        $reset_link = "http://localhost/Jobhunt/backend/auth/reset_password.php?token=" . $reset_token;
        sendResetPasswordEmail($email, $reset_link);

        echo "<script type='text/javascript'>
                alert('A reset link has been sent to your email.');
                window.location.href = '../index.php';
              </script>";
    } else {
        echo "<script type='text/javascript'>
                alert('Email not found!');
                window.location.href = 'forgot_password.php';
              </script>";
    }
}
?>
