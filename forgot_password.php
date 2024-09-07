<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <form action="\Jobhunt\backend\auth\send_reset_link.php" method="POST">
        <label for="email">Enter your email:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
