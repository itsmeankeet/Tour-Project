<!DOCTYPE html>
<html>
    <head>
        <title>Login &bull; Response</title>
    </head>
<body onmousedown="return false" onselectstart="return false">
    <?php

    //creating a session for successfull login
    session_start();

    //database connection
    require '../db_conn.php';

    //getting data from login form
        $email_id = $_POST['l_email_id'];
        $password = $_POST['l_password'];

    $e_query = "SELECT * FROM admin WHERE username = '$email_id'";
    $e_result = mysqli_query($conn, $e_query);
    if(mysqli_num_rows($e_result) === 0)
      {
        echo "<script>alert('User with email  `$email_id`  dosn`t exists!');</script>";
        echo "<script>location.href ='adminloginform.php'</script>";
      }
    elseif(mysqli_num_rows($e_result)>0)
      {
          $ep_query = "SELECT * FROM admin WHERE username = '$email_id' && password = '$password'";
          $ep_result = mysqli_query($conn, $ep_query);
          if(mysqli_num_rows($ep_result)>0)
          {
                $se_query = "SELECT full_name FROM admin WHERE username = '$email_id'";
                $se_result = mysqli_query($conn, $se_query);
                $se_row = mysqli_fetch_array($se_result);
                $user_name = $se_row['full_name'];
                $_SESSION['user_name'] = $user_name;
                $_SESSION['email_id'] = $email_id;

              echo "<script>alert('Welcome Admin, Login to  `Travel.com`  Successful!');</script>";
              echo "<script>location.href ='admindashboard.php'</script>";
          }
          else {
              echo "<script>alert('Email id or Password is incorrect!');</script>";
              echo "<script>window.history.back();</script>";
          }
      }
?>
        </form>
    </body>
</html>
