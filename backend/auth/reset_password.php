<?php
require_once '../db.php';
require_once '../mailer.php'; // Файл за изпращане на имейли

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Проверка дали имейлът съществува
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        $token = bin2hex(random_bytes(50));
        $stmt = $pdo->prepare("UPDATE users SET reset_token = ? WHERE email = ?");
        $stmt->execute([$token, $email]);

        // Изпращане на имейл с линк за ресетване на паролата
        sendResetEmail($email, $token);
        echo "Check your email for reset instructions!";
    } else {
        echo "Email not found!";
    }
}
?>
