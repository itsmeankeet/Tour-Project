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
      $select = mysqli_query($conn, "SELECT * FROM contact_emails");
      ?>
      <div class="product-display">
         <h1>Recet Viewers | Contact E-Mails</h1>
         <table class="product-display-table">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Email</th>
                  <!-- <th>action</th> -->
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['email_id']; ?></td>
               </tr>
            <?php } ?>
         </table>
      </div>
   </div>
   <div class="container">
      <?php
      $select = mysqli_query($conn, "SELECT * FROM users");
      ?>
      <div class="product-display">
         <h1>Logged In Users Details</h1>
         <table class="product-display-table">
            <thead>
               <tr>
                  <th>User Id</th>
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>Password</th>
                  <th>Registration Time</th>
                  <!-- <th>action</th> -->
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['user_name']; ?></td>
                  <td><?php echo $row['email_id']; ?></td>
                  <td><?php echo $row['password']; ?></td>
                  <td><?php echo $row['registration_time']; ?></td>
                  <!-- <td>
                     <a href="#" class="btndsh">Accept </a>
                     <a href="#" class="btndsh"> Reject </a>
                  </td> -->
               </tr>
            <?php } ?>
         </table>
      </div>

   </div>

</body>

</html>