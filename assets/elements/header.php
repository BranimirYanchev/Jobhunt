<?php
session_start();

// Предполага се, че логването задава сесионна променлива 'loggedin'
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>


<header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-logo">
                    <a href="index.php" class="d-flex"><img alt="jobhub" src="assets/imgs/theme/jobhunt-logo.svg"></a>
                    </div>
                <div class="header-left">    
                    <div class="header-nav">
                        <nav class="nav-main-menu d-none d-xl-block">
                            <ul class="main-menu">
                                <li>
                                    <a class="active" href="index.php">Начало</a>
                                </li>
                                 <li class="has-children">
                                    <a href="">Намери</a>
                                    <ul class="sub-menu">
                                        <li><a href="job-list.php">Работа</a></li>
                                        <li><a href="candidates-list.php">Човек</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page-about.php">За Нас</a>
                                </li>
                                <li>
                                    <a href="page-contact.php">Контакти</a>
                                </li>
                            </ul>
                        </nav>
                        
                    </div>
                </div>
                <div class="header-right">
                    <div class="block-signin">
                        <a href="#" class="text-link-bd-btom hover-up">Създай Обява</a>
                        <?php
                            if ($isLoggedIn) {
                                // Когато потребителят е логнат
                                echo '<a class="btn btn-default btn-shadow ml-40 hover-up" href="logout.php">Изход</a>';
                            } else {
                                // Когато потребителят не е логнат
                                echo '<button class="btn btn-default btn-shadow ml-40 hover-up" id="toggleButton">Вход</button>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>