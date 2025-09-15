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
   <title>Events</title>

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
   <h3>Special Events</h3>
   <p><a href="home.php">home</a> <span> / Events</span></p>
</div>

<section class="reviews">

   <h1 class="title">Upcoming Events</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
         <div class="box">
         <img src="images/teaa.jpg" alt=""></div>
            <h3>Ceylon Tea & Treats Afternoon</h3>
            <p><i class="fa-regular fa-calendar-days"></i>  September 21, 2024<br>
            <i class="fa-regular fa-clock"></i>  3:00 PM - 6:00 PM<br>
            <i class="fa-solid fa-ticket"></i> LKR 3,500 per person</p>
            <p>Immerse yourself in the rich flavors of Sri Lanka with our Ceylon Tea & Treats Afternoon. 
               Enjoy a selection of premium Ceylon teas paired with traditional Sri Lankan sweets and savory bites. 
               This event is perfect for tea lovers and those looking to experience the island’s culinary heritage in a relaxed setting.
            </p>
         </div>
   </div>
   <div class="swiper-wrapper">
         <div class="swiper-slide slide">
         <div class="box">
         <img src="images/street.jpg" alt=""></div>
            <h3>Sri Lankan Street Food Festival</h3>
            <p><i class="fa-regular fa-calendar-days"></i>  November 10, 2024<br>
            <i class="fa-regular fa-clock"></i>   6:00 PM - 10:00 PM <br>
            <i class="fa-solid fa-ticket"></i> LKR 3,000 per person</p>
            <p>Experience the vibrant flavors of Sri Lanka’s street food at our Sri Lankan Street Food Festival. This lively event features food stalls serving up local favorites like kottu, hoppers, and isso wade. With live cooking demonstrations, music, and entertainment, it’s a night of fun and flavor for all ages.</p>
         </div>
   </div>

         <div class="swiper-slide slide">
         <div class="box">
         <img src="images/kottunight.jpeg" alt=""></div>
            <h3> Kottu Night: Street Food Extravaganza</h3>
            <p><i class="fa-regular fa-calendar-days"></i>  September 28, 2024<br>
            <i class="fa-regular fa-clock"></i>  7:00 PM - 10:00 PM<br>
            <i class="fa-solid fa-ticket"></i> LKR 4,000 per person</p>
            <p>Dive into the flavors of Sri Lanka’s most beloved street food at Kottu Night! Enjoy an array of kottu roti options, from classic chicken to seafood and vegetarian varieties, all prepared live by our expert chefs. The vibrant atmosphere, complete with local music and dancing, will make this a night to remember.</p>
         </div>

         <div class="swiper-slide slide">
         <div class="box">
         <img src="images/crab.jfif" alt=""></div>
            <h3>Curry and Crab Feast</h3>
            <p><i class="fa-regular fa-calendar-days"></i>   October 5, 2024<br>
            <i class="fa-regular fa-clock"></i>  6:30 PM - 9:30 PM<br>
            <i class="fa-solid fa-ticket"></i> LKR 3,500 per person</p>
            <p>Indulge in a feast of Sri Lanka’s iconic dishes at our Curry and Crab Night. Enjoy a variety of curries and freshly caught crabs, prepared with authentic Sri Lankan spices. This event is perfect for seafood lovers and those who enjoy bold, flavorful dishes. </p>
         </div>

         <div class="swiper-slide slide">
         <div class="box">
         <img src="images/diwali.jfif" alt=""></div>
            <h3>Diwali Dinner: A Festival of Lights</h3>
            <p><i class="fa-regular fa-calendar-days"></i>   November 1, 2024<br>
            <i class="fa-regular fa-clock"></i>   7:00 PM - 10:00 PM<br>
            <i class="fa-solid fa-ticket"></i> LKR 5,500 per person</p>
            <p>Celebrate Diwali, the Festival of Lights, with an enchanting evening of Indian and Sri Lankan fusion cuisine. Our special Diwali dinner features a menu of festive dishes, from rich curries to delicate sweets. The event will be illuminated by traditional oil lamps, creating a warm and festive atmosphere.    </p>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>



</body>
</html>