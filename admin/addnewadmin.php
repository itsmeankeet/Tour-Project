<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="../css/login1.css">
    <title>Admin Login</title>
  </head>

  <body>
    <div class="container" id="container">
      <div class="form-container sign-in">
        <form action="validatenewadmin.php" name="form1" method="POST">
          <h1>Create New Admin</h1>
          <input type="text" placeholder="Full Name" name="l_name">
          <input type="email" placeholder="Email" name="l_email_id" />
          <input type="password" placeholder="Password" name="l_password" />
          <input type="submit" class="btn" value="Create New Account" />
        </form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-right">
            <h1>Hello, Admin!</h1>
            <p>
                Enter the appropriate details of new admin to create new username and password.
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
