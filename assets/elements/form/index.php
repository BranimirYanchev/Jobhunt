<div class="form-page">
  <div class="form_container">
    <i class="uil uil-times form_close"></i>

    <div class="form-headings">
      <h2 class="login-part">Login Form</h2>
      <h2 class="signup-part">Signup Form</h2>
    </div>

    <div class="form-slide-controls">
        <input type="radio" name="slide" id="signup" checked="">
        <input type="radio" name="slide" id="login">
        <label for="login" class="slide login login-part">Login</label>
        <label for="signup" class="slide signup c-b signup-part">Sign up</label>
        <div class="slider-tab"></div>
    </div>

    <!-- Login From -->
    <div class="form">
      <form action="#" class="login-form">

        <div class="input_box">
          <input type="email" name="email" placeholder="Enter your email" required />
          <i class="uil uil-envelope-alt email"></i>
        </div>
        <div class="input_box">
          <input type="password" name="password" placeholder="Enter your password" required />
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

        <button class="button" id="login-btn">Login Now</button>

        <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
      </form>

      <form action="#" class="signup-form">
        <div class="input_box">
          <input type="text" name="username" placeholder="Enter your username" name="username" required />
          <i class="uil uil-envelope-alt email"></i>
        </div>
        <div class="input_box">
          <i class="uil uil-envelope-alt email"></i>
          <input type="email" name="email"  placeholder="Enter your email" required />
        </div>
        <div class="input_box">
          <input type="password" name="password" placeholder="Enter your password" required />
          <i class="uil uil-lock password"></i>
          <i class="uil uil-eye-slash pw_hide"></i>
        </div>

        <button class="button" id="signup-btn">Signup Now</button>

        <div class="login_signup">Already have an account? <a id="login">Login</a></div>
        </form>
    </div>
  </div>
  <script src="assets/elements/form/script.js"></script>
  <script src="assets/elements/form/requests.js"></script>
</div>