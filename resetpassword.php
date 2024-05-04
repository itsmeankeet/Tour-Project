<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/login1.css" />
    <title>User &bull; 🔑 Reset</title>
</head>

<body>
    <?php
    //creating a session for successfull login
    session_start();
    ?>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="val_reset_password.php" method="POST">
                <h1>Reset Password</h1>
                <input type="text" placeholder="Full User Name" name="o_username" />
                <input type="email" placeholder="Email" name="o_email_id" />
                <a href="login.php">Remember Password?</a>
                <input type="submit" class="btn" value="Submit" />
                <a href="index.html">Back to home Page?</a>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Hello, There!</h1>
                    <p>
                        Enter the name & email associated with your account to reset your login password.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
'