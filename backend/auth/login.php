<?php
require_once '../db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            if ($user['email_verified'] == 1) {
                $_SESSION['user_id'] = $user['id'];
                header("Location: ../../dashboard.php");
                exit();
            } else {
                echo "Please verify your email before logging in.";
            }
        } else {
            echo "Invalid email or password!";
        }
    } else {
        echo "Please enter both email and password.";
    }
}
?>
