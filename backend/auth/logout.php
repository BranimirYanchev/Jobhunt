<?php
session_start();

// Премахване на всички сесийни променливи
session_unset();

// Унищожаване на сесията
session_destroy();

// Пренасочване към страницата за вход
header("Location: ../../index.php");
exit();
?>
