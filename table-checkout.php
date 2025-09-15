<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
   exit(); // Ensure script stops if user is not logged in
}

// Initialize the message array
$message = []; // <-- Make sure this is an array

if(isset($_POST['submit'])){

    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];

    // Fetch user information
    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$user_id]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

    // Insert reservation into the database
    $insert_reservation = $conn->prepare("INSERT INTO `reservations` (user_id, username, table_id, date, time) VALUES (?, ?, ?, ?, ?)");
    $insert_reservation->execute([$user_id, $fetch_profile['name'], $people, $date, $time]);

    if($insert_reservation){
        $message[] = 'Reservation made successfully!'; // <-- Add to the array
    } else {
        $message[] = 'Reservation failed! Please try again later.'; // <-- Add to the array
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book a Table</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>Table Reservation</h3>
   <p><a href="home.php">home</a> <span> / Reservation</span></p>
</div>

<section class="checkout">

   <h1 class="title">Book a Table</h1>

   <?php
      // Ensure $message is treated as an array here
      if(!empty($message) && is_array($message)){
         foreach($message as $msg){
            echo '<p class="message">'.$msg.'</p>';
         }
      }
   ?>

<form action="" method="post">

   <div class="user-info">
      <h3>Your Information</h3>
      <p><i class="fas fa-user"></i><span><?= $fetch_profile['name'] ?></span></p>
      <p><i class="fas fa-phone"></i><span><?= $fetch_profile['number'] ?></span></p>
      <p><i class="fas fa-envelope"></i><span><?= $fetch_profile['email'] ?></span></p>
      <a href="update_profile.php" class="btn">Update information</a>
      <h3>Select Date and Time</h3>

      <div style="margin-bottom: 15px;">
         <p><label for="date" style="display: block; margin-bottom: 5px; font-weight: bold;">Date</label></p>
         <input type="date" id="date" name="date" value="2024-08-14" style="width: 100%; padding: 8px; box-sizing: border-box;" required>
      </div>

      <div style="margin-bottom: 15px;">
         <p><label for="time" style="display: block; margin-bottom: 5px; font-weight: bold;">Time</label></p>
         <input type="time" id="time" name="time" value="11:46" style="width: 100%; padding: 8px; box-sizing: border-box;" required>
      </div>

      <div style="margin-bottom: 15px;">
         <p><label for="people" style="display: block; margin-bottom: 5px; font-weight: bold;">How many people?</label></p>
         <select id="people" name="people" style="width: 100%; padding: 8px; box-sizing: border-box;" required>
            <option value="" disabled selected>How many People --</option>
            <option value="1">One person</option>
            <option value="2">Two people</option>
            <option value="3">Three people</option>
            <option value="4">Four people</option>
            <option value="5">Five people</option>
            <option value="6">Six people</option>
         </select>
      </div>

      <input type="submit" value="Confirm" class="btn" style="width:100%; background:var(--red); color:var(--white);" name="submit">
   </div>

</form>
   
</section>

<!-- footer section -->
<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
