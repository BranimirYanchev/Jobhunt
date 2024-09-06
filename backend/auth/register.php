<?php
require_once '../db.php';
require_once '../mailer.php';  // За изпращане на имейли

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $verification_token = bin2hex(random_bytes(50));  // Генериране на уникален токен

    // Проверка за съществуващ имейл
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        echo "Email already registered!";
    } else {
        // Добавяне на потребителя с verification_token
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, verification_token) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$name, $email, $password, $verification_token])) {
            // Изпращане на имейл за верификация
            $verification_link = "http://localhost/Jobhunt/backend/auth/verify_email.php?token=" . $verification_token;
            sendVerificationEmail($email, $verification_link);

            // Пренасочване с JavaScript алърт
            echo "<script type='text/javascript'>
                    alert('Registration successful! Please verify your email.');
                    window.location.href = 'http://localhost/Jobhunt/index.php';
                  </script>";
        } else {
            echo "Error during registration!";
        }
    }
}
?>
