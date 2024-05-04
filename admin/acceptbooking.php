<?php
@include '../db_conn.php';

// Function to update status
function updateStatus($id, $status)
{
    global $conn;
    $query = "UPDATE booked_tours SET status='$status' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Fetch booked tours data
$select = mysqli_query($conn, "SELECT * FROM booked_tours WHERE status IN ('Pending', 'Accepted')");

// Check if $select contains data
if ($select && mysqli_num_rows($select) > 0) {
    // Accept action
    if (isset($_POST['accept'])) {
        $id = $_POST['id'];
        if (updateStatus($id, 'accepted')) {
            // Status updated successfully
            header("Refresh:0");
        } else {
            // Error updating status
            echo "Error: Unable to update status.";
        }
    }

    // Reject action
    if (isset($_POST['reject'])) {
        $id = $_POST['id'];
        if (updateStatus($id, 'rejected')) {
            // Status updated successfully
            header("Refresh:0");
        } else {
            // Error updating status
            echo "Error: Unable to update status.";
        }
    }

    // Finish action
    if (isset($_POST['finish'])) {
        $id = $_POST['id'];
        if (updateStatus($id, 'finished')) {
            // Status updated successfully
            header("Refresh:0");
        } else {
            // Error updating status
            echo "Error: Unable to update status.";
        }
    }
} else {
    echo "Error: No data found.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/admindashboard.css">
</head>

<body>
    <div>
        <?php include "adminnavbar.html"; ?>
        <br><br>
    </div>
    <div class="container">
        <div class="product-display">
            <h1>All Bookings</h1>
            <table class="product-display-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <!-- <th>Email</th> -->
                        <th>Phone</th>
                        <th>Destination</th>
                        <th>Tour Date</th>
                        <th>Total Days</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['full_name']; ?></td>
                           
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['destination']; ?></td>
                            <td><?php echo $row['tour_date']; ?></td>
                            <td><?php echo $row['num_days']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <?php if ($row['status'] == 'pending') { ?>
                                        <button type="submit" name="accept" class="btndsh accept">Accept</button>
                                        <button type="submit" name="reject" class="btndsh reject">Reject</button>
                                    <?php } elseif ($row['status'] == 'accepted') { ?>
                                        <button type="submit" name="finish" class="btndsh finish">Finished</button>
                                    <?php } elseif ($row['status'] == 'finished') { ?>
                                        <span>Finished</span>
                                    <?php } elseif ($row['status'] == 'rejected') { ?>
                                        <span>Rejected</span>
                                    <?php } ?>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>