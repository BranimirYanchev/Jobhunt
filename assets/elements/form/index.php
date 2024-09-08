<div class="form-page fade-in">
  <div class="form_container">
    <i class="uil uil-times form_close"></i>
    <!-- Login From -->
    <div class="form login_form">
      <form action="#">
        <h2>Login Form</h2>

        <div class="form-slide-controls">
          <input type="radio" name="slide" id="signup" checked="">
          <input type="radio" name="slide" id="login">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup c-b">Sign up</label>
          <div class="slider-tab"></div>
        </div>

        <div class="input_box">
          <input type="email" placeholder="Enter your email" required />
          <i class="uil uil-envelope-alt email"></i>
        </div>
        <div class="input_box">
          <input type="password" placeholder="Enter your password" required />
          <i class="uil uil-lock password"></i>
          <i class="uil uil-eye-slash pw_hide"></i>
        </div>

        <div class="option_field">
          <span class="checkbox">
            <input type="checkbox" id="check" />
            <span for="check">Remember me</span>
          </span>
          <a href="#" class="forgot_pw">Forgot password?</a>
        </div>

        <button class="button">Login Now</button>

        <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
      </form>
    </div>

    <!-- Signup From -->
    <div class="form signup_form hide-form">
      <form action="#">
        <h2>Signup</h2>

        <div class="form-slide-controls">
        <input type="radio" name="slide" id="signup" checked="">
          <input type="radio" name="slide" id="login">
          <label for="login" class="slide login c-b">Login</label>
          <label for="signup" class="slide signup">Sign up</label>
          <div class="slider-tab"></div>
        </div>

        <div class="input_box">
          <input type="text" placeholder="Enter your username" name="username" required />
          <i class="uil uil-envelope-alt email"></i>
        </div>
        <div class="input_box">
          <i class="uil uil-envelope-alt email"></i>
          <input type="email" placeholder="Enter your email" required />
        </div>
        <div class="input_box">
          <input type="password" placeholder="Enter your password" required />
          <i class="uil uil-lock password"></i>
          <i class="uil uil-eye-slash pw_hide"></i>
        </div>

        <button class="button">Signup Now</button>

        <div class="login_signup">Already have an account? <a id="login">Login</a></div>
      </form>
    </div>
  </div>
  <script src="assets/elements/form/script.js"></script>
</div>