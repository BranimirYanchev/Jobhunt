<?php
require_once '../db.php';
require_once '../mailer.php';  // За изпращане на имейли

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$type = 1;

include "verify_data.php";

session_start();

$password = password_hash($password, PASSWORD_DEFAULT);

$verification_token = bin2hex(random_bytes(50));  // Генериране на уникален токен

// Проверка за съществуващ имейл
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);

if ($stmt->rowCount() > 0) {
    echo json_encode(["status" => "user_exists"]);
    exit();
}

// Добавяне на потребителя с verification_token
$stmt = $pdo->prepare("INSERT INTO users (username, email, password, verification_token) VALUES (?, ?, ?, ?)");
if ($stmt->execute([$username, $email, $password, $verification_token])) {
    // Изпращане на имейл за верификация
    $verification_link = "http://95.111.122.186:8080/backend/auth/verify_email.php?token=" . $verification_token;
    sendVerificationEmail($email, $verification_link);

    $_SESSION['user_id'] = 1;
    $_SESSION['username'] = $username;
    $_SESSION["is_logged_in"] = true;

    echo json_encode(["status" => "success"]);
    exit();
}

echo json_encode(["status" => "error"]);
?>
