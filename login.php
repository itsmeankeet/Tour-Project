<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="css/login1.css" />
  <title>Signup &bull; Login</title>
</head>

<body>
  <?php
  session_start();
  ?>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form action="validate_signup.php" name="form2" onsubmit="return validateSignup()" method="post">
        <h1>Create Account</h1>
        <input id="s_user" type="text" class="input" placeholder="Enter Your Full Name" name="s_username" required />
        <input id="s_email_id" type="email" class="input" placeholder="Enter Email Address" name="s_email_id"
          required />
        <input id="s_new_pass" type="password" class="input" placeholder="Enter New Password" name="s_password"
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
          title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
          required />
        <input id="s_re_pass" type="password" class="input" placeholder="Confirm New Password"
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
          title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
          required />
        <input type="submit" class="btn" value="Sign Up" />
      </form>
    </div>
    <div class="form-container sign-in">
      <form action="validate_login.php" name="form1" method="POST">
        <h1>Log In</h1>
        <input type="email" placeholder="Email" name="l_email_id" />
        <input type="password" placeholder="Password" name="l_password" />
        <a href="resetpassword.php">Forget Your Password?</a>
        <input type="submit" class="btn" value="Log In" />
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-right">
        <h1>Hello, there!</h1>
          <p>
            Register with your personal details to use all of site features
          </p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
        <div class="toggle-panel toggle-left">
        <h1>Welcome Back!</h1>
          <p>Enter your personal details to use all of site features</p>
          <button class="hidden" id="login">Log In</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    const container = document.getElementById("container");
    const registerBtn = document.getElementById("register");
    const loginBtn = document.getElementById("login");

    registerBtn.addEventListener("click", () => {
      container.classList.add("active");
    });

    loginBtn.addEventListener("click", () => {
      container.classList.remove("active");
    });

    function validateSignup() {
      var s_new_pass = document.getElementById("s_new_pass").value;
      var s_re_pass = document.getElementById("s_re_pass").value;
      if (s_new_pass != s_re_pass) {
        alert("Error :  Passwords didn't match");
        return false;
      }
    }
  </script>
</body>

</html>