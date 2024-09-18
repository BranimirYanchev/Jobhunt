<?php

// Function to validate email
function validateEmail($email) {
    // Regular expression for validating email format
    $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    
    // Check if the email matches the pattern
    return preg_match($emailPattern, $email) ? true : false;
}

// Function to validate password
function validatePassword($password) {
    // Regular expression for validating password rules:
    // At least 8 characters, at least one uppercase letter, one lowercase letter, one digit, and one special character.
    $passwordPattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    
    // Check if the password matches the pattern
    return preg_match($passwordPattern, $password) ? true : false;
}

// Function to validate username
function validateUsername($username) {
    // Regular expression for validating username:
    // Should be 3-20 characters, start with a letter, and can contain letters, numbers, and underscores.
    $usernamePattern = "/^[a-zA-Z][a-zA-Z0-9_]{2,19}$/";
    
    // Check if the username matches the pattern
    return preg_match($usernamePattern, $username) ? true : false;
}

$message = ["status" => "success"];

if (!validateEmail($email)) {
    $message = ["status" => "email_error"];
    echo json_encode($message);
    exit();
}else if (!validatePassword($password)) {
    $message = ["status" => "password_error"];
    echo json_encode($message);
    exit();
}else if ($type == 1 && !validateUsername($username)) {
    $message = ["status" => "username_error"];
    echo json_encode($message);
    exit();
}

?>
