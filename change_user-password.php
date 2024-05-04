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

  //creating a session for successfull login
  session_start();

  //database connection
  require 'db_conn.php';

  //getting user email
  $email_id = $_SESSION['email_id'];
  $_SESSION['email_id'] = $email_id;
  ?>
  <div class="container" id="container">
    <div class="form-container sign-in">
      <form action="val_change_user-password.php" name="form1" method="POST">
        <h1>Create New Password</h1>
        <input id="s_email_id" type="text" class="input" value="[ <?php echo $email_id; ?> ]"
          placeholder="Enter Email Address" name="s_email_id" required disabled>
        <input id="s_new_pass" type="password" class="input" placeholder="Enter New Password" name="s_password"
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
          title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
          required>
        <input id="s_re_pass" type="password" class="input" placeholder="Confirm New Password"
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
          title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
          required>
        <a href="resetpassword.php">Remember Password?</a>
        <input type="submit" class="btn" value="Log In" />
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-right">
          <h1>Hello,</h1>
          <p>
            Register with your personal details to use all of site features
          </p>
          <button class="hidden" id="register">Back Home</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    const container = document.getElementById("container");
    const registerBtn = document.getElementById("register");
    function validateSignup() {
    var s_new_pass = document.getElementById('s_new_pass').value;
    var s_re_pass = document.getElementById('s_re_pass').value;
    if (s_new_pass != s_re_pass) {
      alert("Error :  Passwords didn't match");
      return false;
    }
  }
  </script>
</body>

</html>