<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Promotions</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

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
   <h3>Promotions</h3>
   <p><a href="home.php">home</a> <span> / Promotions</span></p>
</div>

<section class="reviews">

   <h1 class="title">New Promotions</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/happy.png" alt="">
            <h3>Happy Hour Specials</h3>
            <p><i class="fa-regular fa-clock"></i>   Monday to Friday, 4:00 PM - 7:00 PM </p>
            <p>Enjoy a 50% discount on selected appetizers and beverages, including local favorites like arrack cocktails, Lion beer, and tropical fruit mocktails.
            </p>   
         </div>

         <div class="swiper-slide slide">
            <img src="images/lunch.png" alt="">
            <h3>Lunch Combo Deals</h3>
            <p><i class="fa-regular fa-clock"></i>   Monday to Friday, 12:00 PM - 2:00 PM </p>
            <p>Choose from a selection of lunch combos that include a main dish, a side, and a drink for just LKR 1,200. Options include rice and curry, kottu, and string hoppers   </p>   
         </div>

         <div class="swiper-slide slide">
            <img src="images/family.png" alt="">
            <h3>Weekend Family Feast</h3>
            <p><i class="fa-regular fa-clock"></i>    Sat and Sun, 11:00 AM - 3:00 PM </p><br>
            <p> Order any family-sized meal (designed for 4 or more) and receive a complimentary dessert platter or a bottle of house wine.</p><br><br>  
         </div>

         <div class="swiper-slide slide">
            <img src="images/take.png" alt="">
            <h3>Takeaway Tuesdays</h3>
            <p><i class="fa-regular fa-clock"></i>   Monday to Friday, 4:00 PM - 7:00 PM </p>
            <p>Enjoy a 20% discount on all takeaway orders every Tuesday. Perfect for busy customers who want to enjoy a delicious Sri Lankan meal at home.      </p>   
         </div>

         <div class="swiper-slide slide">
            <img src="images/dessart.jpg" alt="">
            <h3>Free Dessert with Dinner</h3><br><br><br><br>
            <p>Dine in and order a main course after 6:00 PM to receive a complimentary traditional Sri Lankan dessert, such as wattalappam or kiri toffee. </p> <br>  
         </div>

         <div class="swiper-slide slide">
            <img src="images/loyalty.jpg" alt="">
            <h3>Loyalty Program</h3><br><br>
            <p>Sign up for our loyalty program and earn points for every rupee spent. Accumulate points to redeem for discounts, free meals, or exclusive offers. New members get a 10% discount on their next visit.          </p>   
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>