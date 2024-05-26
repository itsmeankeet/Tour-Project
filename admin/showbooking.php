<?php

@include '../db_conn.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="../css/admindashboard.css">

</head>

<body>
   <div>
      <?php
      include "adminnavbar.html";
      ?>
      <br><br>
   </div>
   <div class="container">
      <?php
      $select = mysqli_query($conn, "SELECT * FROM booked_tours");
      ?>
      <div class="product-display">
         <h1>All Booking</h1>
         <table class="product-display-table">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Destination</th>
                  <th>Tour Date</th>
                  <th>Total Days</th>
                  <th>Status</th>
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['full_name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['destination']; ?></td>
                  <td><?php echo $row['tour_date']; ?></td>
                  <td><?php echo $row['num_days']; ?></td>
                  <td><?php echo $row['status']; ?></td>

               </tr>
            <?php } ?>
         </table>
      </div>

   </div>


</body>

</html>