<?php
session_start();
require 'vendor/autoload.php';
$config = require 'config.php';

use League\OAuth2\Client\Provider\Facebook;
use League\OAuth2\Client\Provider\Google;

function getDatabaseConnection() {
    // Настройка на връзката с базата данни
    $dsn = 'mysql:host=localhost;dbname=your_database';
    $username = 'db_user';
    $password = 'db_password';
    return new PDO($dsn, $username, $password);
}

function handleOAuthCallback($providerName) {
    global $config;
    $provider = $providerName === 'facebook'
        ? new Facebook([
            'clientId' => $config['facebook']['client_id'],
            'clientSecret' => $config['facebook']['client_secret'],
            'redirectUri' => $config['facebook']['redirect_uri'],
        ])
        : new Google([
            'clientId' => $config['google']['client_id'],
            'clientSecret' => $config['google']['client_secret'],
            'redirectUri' => $config['google']['redirect_uri'],
        ]);

    if (!isset($_GET['code'])) {
        // Получаване на код за авторизация
        $authUrl = $provider->getAuthorizationUrl();
        $_SESSION['oauth2state'] = $provider->getState();
        header('Location: ' . $authUrl);
        exit;
    } elseif (isset($_GET['state']) && ($_GET['state'] !== $_SESSION['oauth2state'])) {
        // Проверка на state
        exit('Invalid state');
    } else {
        // Получаване на токен и информация за потребителя
        $token = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);
        $user = $provider->getResourceOwner($token);
        $userId = $user->getId();
        $providerName = $providerName;

        $pdo = getDatabaseConnection();
        $stmt = $pdo->prepare('INSERT INTO oauth_users (user_id, provider, provider_id, created_at) VALUES (?, ?, ?, NOW()) ON DUPLICATE KEY UPDATE created_at = NOW()');
        $stmt->execute([$userId, $providerName, $token->getToken()]);

        echo 'Hello, ' . $user->getName();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['provider'])) {
        handleOAuthCallback($_GET['provider']);
    }
}
