<?php
require_once '../db.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Проверка дали токенът съществува
    $stmt = $pdo->prepare("SELECT * FROM users WHERE verification_token = ?");
    $stmt->execute([$token]);
    $user = $stmt->fetch();

    if ($user) {
        // Верифициране на имейла
        $stmt = $pdo->prepare("UPDATE users SET email_verified = 1, verification_token = NULL WHERE id = ?");
        if ($stmt->execute([$user['id']])) {
            echo "Email verified successfully!";
            // Пренасочване към страницата за вход или дашборд
            header("Location: ../../index.php?email_verified=1");
        } else {
            echo "Error verifying email!";
        }
    } else {
        echo "Invalid verification token!";
    }
} else {
    echo "No token provided!";
}
?>
