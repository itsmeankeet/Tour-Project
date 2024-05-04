<?php
session_start();

// unset session variable
session_unset();

// destroy session
session_destroy();

echo "<script>alert('User logout of  `Travel.com`  Successful!');</script>";
echo "<script>location.href ='index.html'</script>";
?>
