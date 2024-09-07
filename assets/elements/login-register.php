<div id="login-register" class="login-register">
    <section class="container2 forms">
        <div class="form login">
            <div class="form-content">
                <!-- Бутон за затваряне -->
                <button id="closeButton-login" class="close-button">&times;</button>

                <header class="header-login-register">Вход</header>
                <form action="backend/auth/login.php" method="POST">
                    <div class="field input-field">
                    <input type="email" name="email" placeholder="Имейл" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Парола" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="form-link">
                        <a href="forgot_password.php" class="forgot-pass">Забравена парола?</a>
                    </div>
                    <div class="field button-field">
                        <button type="submit">Влез</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Нямам акаунт! | <a href="#" class="link signup-link">Регистрация</a></span>
                </div>
            </div>
            <div class="line"></div>
            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span href="Jobhunt\backend\callback\facebook.php">Вход с FaceBook</span>
                </a>
            </div>
            <div class="media-options"> 
                <a href="#" class="field google">
                    <img src="./assets/imgs/google.png" alt="" class="google-img">
                    <span href="Jobhunt\backend\callback\google.php">Вход с Google</span>
                </a>
            </div>
        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <!-- Бутон за затваряне -->
                <button id="closeButton-signup" class="close-button">&times;</button>

                <header class="header-login-register">Регистрация</header>
                <form action="backend/auth/register.php" method="POST">
                    <div class="field input-field">
                    <input type="text" name="name" placeholder="Две Имена" required>
                    </div>
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Имейл" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Парола" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="field button-field">
                        <button type="submit">Регистрация</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Имам акаунт! | <a href="#" class="link login-link">Вход</a></span>
                </div>
            </div>
            <div class="line"></div>
            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span href="Jobhunt\backend\callback\facebook.php">Вход с FaceBook</span>
                </a>
            </div>
            <div class="media-options">
                <a href="#" class="field google">
                    <img src=".\assets\imgs\google.png" alt="" class="google-img">
                    <span href="Jobhunt\backend\callback\google.php">Вход с Google</span>
                </a>
            </div>
        </div>
    </section>
</div>
