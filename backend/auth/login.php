<?php
require_once '../db.php';
session_start();

if (!(isset($_POST['email']) && isset($_POST['password']))) {
    echo json_encode(["status" => "error"]);
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];
$type = 0;

include "verify_data.php";

$userInfo = fetchData($pdo, $email);

if ($userInfo && password_verify($password, $userInfo['password'])) {
    if ($userInfo['email_verified'] == 1) {
        $_SESSION['user_id'] = $userInfo['id'];
        $_SESSION['username'] = $userInfo["username"];
        echo json_encode($message);
        exit();
    }
} else {
    echo json_encode(["status" => "user_not_exists"]);
}

function fetchData($pdo, $email)
{
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    return $stmt->fetch();
}
?>
