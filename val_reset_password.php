<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forgot Password &bull; Response</title>
    <link rel="icon" type="image/x-icon" href="Media/ark_favicon.png">
    </head>
    <body onmousedown="return false" onselectstart="return false">
        <?php
        //creating a session for successfull login
        session_start();
        //database connection
        require 'db_conn.php';
        //getting data from login form
            $user_name = $_POST['o_username'];
            $email_id = $_POST['o_email_id'];
            $e_query = "SELECT * FROM users WHERE email_id = '$email_id'";
            $e_result = mysqli_query($conn, $e_query);
            if(mysqli_num_rows($e_result) === 0)
              {
                echo "<script>alert('User with email  `$email_id`  dosn`t exists!');</script>";
                echo "<script>location.href ='resetpassword.php'</script>";
              }
            elseif(mysqli_num_rows($e_result)>0)
              {
                  $eu_query = "SELECT * FROM users WHERE email_id = '$email_id'";
                  $eu_result = mysqli_query($conn, $eu_query);
                  if(mysqli_num_rows($eu_result)>0)
                  {
                        $_SESSION['email_id'] = $email_id;
                        echo "<script>location.href ='change_user-password.php'</script>";
                  }
              }
        ?>
    </body>
</html>