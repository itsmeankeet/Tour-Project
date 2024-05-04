<?php
    // Include database connection file
    include("db_conn.php");

    // Retrieve form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['destination'];
    $tour_date = $_POST['date'];
    $num_days = $_POST['num_days'];
    $notes = $_POST['notes'];

    // Basic input validation
    if (empty($full_name) || empty($email) || empty($phone) || empty($destination) || empty($tour_date) || empty($num_days)) {
        echo "All fields are required.";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Validate phone number format
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "Invalid phone number format";
        exit;
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO booked_tours (full_name, email, phone, destination, tour_date, num_days, notes) 
            VALUES ('$full_name', '$email', '$phone', '$destination', '$tour_date', '$num_days', '$notes')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if($result) {
        echo "Your tour has been booked successfully. We will contact you soon.";
    } else {
        // If there's an error, display the error message
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
?>
