<!DOCTYPE html>
<html>
    <head>
        <title>Sign up &bull; Response</title>
        <link rel="icon" type="image/x-icon" href="Media/ark_favicon.png">
    </head>
<body onmousedown="return false" onselectstart="return false">
    <?php
    //creating a session for successfull login
    session_start();

    //database connection
    require '../db_conn.php';

    //getting data from signup form
        $user_name = $_POST['l_name'];
        $email_id = $_POST['l_email_id'];
        $password = $_POST['l_password'];

    $e_query = "SELECT * FROM admin WHERE username = '$email_id'";
    $e_result = mysqli_query($conn, $e_query);
    if(mysqli_num_rows($e_result)>0)
        {
        echo "<script>alert('This Email-id already associated with another account!');</script>";
        echo "<script>window.history.back();</script>";
        }
    else {
    $admin_query = "insert into admin (full_name, username, password) values ('$user_name', '$email_id', '$password' )";
    $admin_submit = mysqli_query($conn, $admin_query) or die(mysqli_error($conn));

        echo "<script>alert('You have successfully Loged-In to  `Travel.com`');</script>";
        echo "<script>alert('Log-In into your account using same credentials.');</script>";
        echo "<script>window.location.href ='adminloginform.php'</script>";
        }
?>
        </form>
    </body>
</html>
