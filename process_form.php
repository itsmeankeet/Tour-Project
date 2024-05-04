<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email is provided and is a valid email address
    if (isset($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        // Retrieve the email from the form submission
        $email = $_POST["email"];
        
        // Include database connection file
        include("db_conn.php");
        
        // Escape the email to prevent SQL injection
        $safe_email = mysqli_real_escape_string($conn, $email);
        
        // Construct SQL query to insert the email
        $users_email_query = "INSERT INTO contact_emails (email_id) VALUES ('$safe_email')";
        
        // Execute the SQL query
        $users_email_submit = mysqli_query($conn, $users_email_query);
        
        // Check if query execution was successful
        if ($users_email_submit) {
            // Redirect to thank you page
            header("Location: thankyou.html");
            exit();
        } else {
            // If query execution fails, handle the error gracefully
            die("Error: " . mysqli_error($conn));
        }
    } else {
        // If email is not provided or is invalid, show an error message or redirect back to the form page
        die("Invalid email address provided.");
    }
}
?>
