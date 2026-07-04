<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/dummy.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

<div class="logo">
<b>EcoLife </b><img src="image/logo-2.png"  alt="" width="75" height="50">
</div>
   <nav class="navbar">
   <a href="home.php"><b>home</b></a>
      <a href="about.php"><b>about</b></a>
      <a href="package.php"><b>package</b></a>
      <a href="book.php"><b>book</b></a>
      <a href="logout.php" class="logout"><b>logout</b></a>
     
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(image/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your pest control!</h1>
   <a href="TxnTest.php" target="_blank" align="center"><img src="image/online.png" width="120" height="110" name="book_online" class="payment" ></a>
   <form action="mysql_form.php" method="post" class="book-form">
     
      <div class="flex">
         <div class="inputBox">
            <span>Full Name :</span>
            <input type="text" placeholder="Enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="number" placeholder="Enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="Enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>Which Pest Control You Want : </span>
            <input type="text" placeholder="Mention type" name="type">
         </div>
       
         <div class="inputBox">
            <span>Mention date you want : </span>
            <input type="date" name="arrivals">
         </div>
       
      </div>
     
     
      <input type="submit" value="Submit" class="btn" name="send">
      
      
   </form>

</section>

<!-- booking section ends -->














<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> ecolife@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://facebook.com"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>
   </div>

   <div class="credit"> created by <span>miss. Dnyaneshwari Musale & miss. nandita goje</span> | pest control services! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>