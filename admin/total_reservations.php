<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:admin_login.php');
    exit(); // Ensure the script stops executing if not logged in
}

if (isset($_POST['update_reservation'])) {

    $reservation_id = $_POST['reservation_id'];
    $reservation_status = $_POST['reservation_status'];
    $update_status = $conn->prepare("UPDATE `reservations` SET status = ? WHERE id = ?");
    $update_status = $conn->prepare("UPDATE `reservations` SET status = ? WHERE reservation_id = ?");
    $message[] = 'Reservation status updated!';
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_reservation = $conn->prepare("DELETE FROM `reservations` WHERE id = ?");
    $delete_reservation->execute([$delete_id]);
    header('location:total_reservations.php');
    exit(); // Ensure the script stops executing after deletion
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Total Reservations</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include 'os_header.php'; ?>

<!-- total reservations section starts  -->

<section class="placed-orders">

   <h1 class="heading">Total Reservations</h1>

   <div class="box-container">

   <?php
      $select_reservations = $conn->prepare("SELECT * FROM `reservations`");
      $select_reservations->execute();
      if ($select_reservations->rowCount() > 0) {
         while ($fetch_reservations = $select_reservations->fetch(PDO::FETCH_ASSOC)) {
   ?>
   <div class="box">
      <p> Reservation ID : <span><?= $fetch_reservations['reservation_id']; ?></span> </p>
      <p> User ID : <span><?= $fetch_reservations['user_id']; ?></span> </p>
      <p> Name : <span><?= $fetch_reservations['username']; ?></span> </p>
      <p> Table ID : <span><?= $fetch_reservations['table_id']; ?></span> </p>
      <p> Date : <span><?= $fetch_reservations['date']; ?></span> </p>
      <p> Time : <span><?= $fetch_reservations['time']; ?></span> </p>
      <form action="" method="POST">
         <input type="hidden" name="reservation_id" value="<?= $fetch_reservations['reservation_id']; ?>">
         <select name="reservation_status" class="drop-down">
            <option value="disabled" selected><?= $fetch_reservations['status']; ?></option>
            <option value="pending">Pending</option>
            <option value="confirmed">Confirmed</option>
            <option value="completed">Completed</option>
            <option value="cancelled">Cancelled</option>
         </select>
         <div class="flex-btn">
            <input type="submit" value="Update" class="btn" name="update_reservation">
            <a href="total_reservations.php?delete=<?= $fetch_reservations['reservation_id']; ?>" class="delete-btn" onclick="return confirm('Delete this reservation?');">Delete</a>

         </div>
      </form>
   </div>
   <?php
         }
      } else {
         echo '<p class="empty">No reservations placed yet!</p>';
      }
   ?>

   </div>

</section>

<!-- total reservations section ends -->

<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>
