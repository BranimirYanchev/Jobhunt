<?php
require_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['token'];
    $new_password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Проверка на токена
    $stmt = $pdo->prepare("SELECT * FROM users WHERE reset_token = ? AND reset_token_expires > NOW()");
    $stmt->execute([$token]);

    if ($stmt->rowCount() > 0) {
        // Актуализиране на паролата
        $stmt = $pdo->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_token_expires = NULL WHERE reset_token = ?");
        $stmt->execute([$new_password, $token]);

        echo "<script type='text/javascript'>
                alert('Password has been updated successfully.');
                window.location.href = '../index.php';
              </script>";
    } else {
        echo "Invalid or expired token!";
    }
}
?>
