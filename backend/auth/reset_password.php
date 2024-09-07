<?php
require_once '../db.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Проверка на токена
    $stmt = $pdo->prepare("SELECT * FROM users WHERE reset_token = ? AND reset_token_expires > NOW()");
    $stmt->execute([$token]);

    if ($stmt->rowCount() > 0) {
        // Показване на форма за нова парола
        ?>
        <form action="update_password.php" method="POST">
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <label for="password">Нова парола:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Потвърди</button>
        </form>
        <?php
    } else {
        echo "Invalid or expired token!";
    }
} else {
    echo "No token provided!";
}
?>
