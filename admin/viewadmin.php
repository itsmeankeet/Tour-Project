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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="../css/admindashboard.css">
    <style>
        form input {
            width: 15rem;
            height: 4rem;
            border-radius: 50px;
            background: transparent;
            border: 2px solid black;
            cursor: pointer;
            transition: all 1s linear ease;
        }

        form input:hover {
            background-color: black;
            color: white;
        }
    </style>
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
      $select = mysqli_query($conn, "SELECT * FROM admin");
      ?>
      <div class="product-display">
         <h1>All Admins Associated with this Page</h1>
         <table class="product-display-table">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['full_name']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['password']; ?></td>
                  <!-- <td>
                     <a href="#" class="btndsh">Accept </a>
                     <a href="#" class="btndsh"> Reject </a>
                  </td> -->
               </tr>
            <?php } ?>
         </table>
      </div>
        <div class="btn2">
            <form action="addnewadmin.php">
                <input type="submit" value="Add New Admin">
            </form>
        </div>
   </div>
</body>

</html>