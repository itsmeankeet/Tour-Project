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
    $total_passengers = $_POST['number_of_passengers'];
    $notes = $_POST['notes'];

    // Basic input validation
    if (empty($full_name) || empty($email) || empty($phone) || empty($destination) || empty($tour_date) || empty($num_days || empty($total_passengers))) {
        echo "<script>alert('All fields are required.');</script>";
        echo "<script>location.href ='customerhomepage.html'</script>";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format');</script>";
        echo "<script>location.href ='customerhomepage.html'</script>";
        exit;
    }

    // Validate phone number format
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "<script>alert('Invalid phone number format');</script>";
        echo "<script>location.href ='customerhomepage.html'</script>";
        exit;
    }
    //validate number of days
    if (!preg_match("/^[1-9][0-9]*$/", $num_days)) {
        echo "<script>alert('Number of Days cannot be negative');</script>";
        echo "<script>location.href ='customerhomepage.html'</script>";
        exit;
    }
    //validate total passenger
    
    if (!preg_match("/^[1-9][0-9]*$/", $total_passengers)) {
        echo "<script>alert('Total passenger cannot be negative');</script>";
        echo "<script>location.href ='customerhomepage.html'</script>";
        exit;
    }
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO booked_tours (full_name, email, phone, destination, tour_date, num_days, notes) 
            VALUES ('$full_name', '$email', '$phone', '$destination', '$tour_date', '$num_days', '$notes')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if($result) {
        echo "<script>alert('Your tour has been submitted successfully. We will contact you soon.');</script>";
        echo "<script>location.href ='customerhomepage.html'</script>";
    } else {
        // If there's an error, display the error message
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
    ?>>
