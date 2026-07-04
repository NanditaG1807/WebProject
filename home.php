
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link -->
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
      <a href="logout.php" class="logout"><b>logout</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php 
      echo $_SESSION['usermail']; 
      ?>
      </ul>
   </nav>


   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->





<!-- home section starts  -->

<section class="home">

   <div class=" swiper home-slider">

      <div class="swiper-wrapper">

         <div class=" swiper-slide slide" style="background:url(image/home-slide-1.jfif) no-repeat"  >
            <div class="content">
               <span>protect your home today</span>
               <h3>we care about your pest infection</h3>
               
            </div>
         </div>

         <div class=" swiper-slide slide" style="background:url(image/home-slide-2.jfif) no-repeat">
            <div class="content">
               <span>don't worry we will help out you!<br>
             fastest pest control system ever!</span>
               <h3>worried with pests?</h3>
               
            </div>
         </div>

         <div class=" swiper-slide slide" style="background:url(image/home-slide-3.jfif) no-repeat">
            <div class="content">
               <span>destroy your home pest</span>
               <h3>keep your home clean and healthy!</h3>
               
            </div>
         </div>
         
      </div>


      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>
</section>
<section class="sum">
   <div class="summary">
      <h3>what is pesticide?</h3>
   <p>A pesticide is defined as a chemical agent used to destroy or control pests. The generic term pesticides can apply to a wide spectrum of chemicals, including insecticides, rodenticides, herbicides, fungicides, biocides, and similar chemicals.</p>
<h3> what is a pest? </h3>
<p>A pest is any living organism which competes with human, domestic animals or desirable plants for food or ater.At the same time they spreaddiseases to mankind and harms the environment.</p>
<h3>What is pest control?</h3>
<p>Pest control refers to the regulation or management of a species defined as a pest, usually because it is perceived to be detrimental to a person's health, the ecology or the economy.</p>
<p>Pests are of different types and include cockroaches, ants, termites, rats, mice, mosquitoes, spiders, moths, and others. They can be rodents, animals, or even insects that are harmful and adversely affect health, destroy property, and cause damage.</p>
<p>Pests can make you fall ill and cause various diseases through their bite or feces/droppings. They carry and transmit multiple diseases including dengue, malaria and even asthma. But, the inappropriate and incorrect uses of chemicals to eliminate such pests can have adverse effects. So, the best option is to take the assistance of an exterminator from a pest control service. </p>
<p>we are provide chemical pest control and bio-chemical pest control that include termite pest control, bedbug pest control,cockroach pest control, rat pest control.</p>
    </div>
 
    </section>
<section class="home-about">

<div class="image-right">
   <img src="image/termite-4.png" alt="">
</div>

<div class="content">
   <h3>Termite Pest Control</h3>
   <p>Termites are typically known as the “silent destroyer” because they will be in secret concealment and thriving in your home or yard with none immediate signs of harm. All termites consume cellulose-based plant materials. Unfortunately, all homes, despite their construction type, will give cellulose food for white ant infestation.</p>
   <a href="termite.php" class="btn">read more</a>
</div>

</section>



<section class="home-about">

  <div class="content">
      <h3>Cockroaches Pest Control</h3>
      <p>Cockroaches are insects of the order suborder Blattodea, which conjointly includes termites. About thirty roach species out of 4,600 are related to human habitats. About four species are well known as pests.</p>
      <a href="cockroach.php" class="btn">read more</a>
   </div>
   <div class="image">
      <img src="image/cockroach-3.png" alt="">
   </div>

</section>



<section class="home-about">

   <div class="image-right">
      <img src="image/bedbug-5.png" alt="">
   </div>

   <div class="content">
      <h3>Bed Bug Pest Control</h3>
      <p>Bedbugs feed on blood, cause itching and so make it hard for you to fall asleep in the night. They wreak destruction in mattresses, furniture, curtains, and even beds. It does not take long for the infestation to spread.Bed Bug are parasitic insects feed exclusively on blood. Bed Bug are human parasites. Get rid of Bed Bug. Get Pest Control Of Bed Bug  From</p>
      <a href="bedbug.php" class="btn">read more</a>
     
   </div>

</section>

<section class="home-about">

  <div class="content">
      <h3>Rat Pest Control</h3>
      <p>Rodents, normally called rats or mice are among the foremost widespread pests. From homes to factories & hospitals to offices, they will be found even within the best-kept premises as long it provides them food & shelter. Apart from harm to material and article of furniture, rodents cause food-contamination, diseases and irreparable harm to your social and private image.</p>
      <a href="rat.php" class="btn">read more</a>
   </div>
   <div class="image">
      <img src="image/rat-2.png" alt="">
   </div>

</section>


</section>
<!-- home section ends -->

<!-- services section starts  -->

<section class="services">


<h1 class="heading-title" font-size="12" > our services <img src="image/pest-control-services.png" alt="" width="130" height="70"> </h1>

   <div class="box-container">

      <div class="box">
      <a href="bedbug.php" > <img src="image/bedbug-3.jpg" alt="">
       <h3>Bed Bug Pest Control</h3></a>
      
       
      </div>

      <div class="box">
      <a href="cockroach.php" ><img src="image/cockroach-1.jpg" alt="">
         <h3>Cockroach Pest Control</h3></a>
      </div>

      <div class="box">
      <a href="rat.php" ><img src="image/rat-1.jpg" alt="">
         <h3>Rat Pest Control</h3></a>
      </div>

      <div class="box">
      <a href="termite.php" ><img src="image/termite-1.jpg" alt="">
         <h3>Termite Pest Control</h3></a>
      </div>

      

   </div>

</section>

<!-- services section ends -->


<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="image/employee.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>EcoLife Services & Pest Control is a specialised organisation in the field of quality Pest Control, providing all kind of solutions under one roof including preventive applications, supplies of all pest control materials including chemicals and pest control equipment’s.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="image/bio-chemical-1.jfif" alt="">
         </div>
         <div class="content">
            <h3>Bio-Chemical Pest Control</h3>
            <p>Biochemical pesticides are non-toxic and natural mechanisms that can be used to inactivate or kill the pests, often by interfering with mating. cockroach pest control </p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="image/chemical.jfif" alt="">
         </div>
         <div class="content">
            <h3>Chemical Pest Control</h3>
            <p>Chemical pest control tends to be harsher to humans and the environment, but they provide results way faster. rat pest control,bed-bug pest control </p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="image/img-4.jfif" alt="">
         </div>
         <div class="content">
            <h3> (All In One) Pest Control</h3>
            <p>herbal pesticides tend to be odourless and harmless in terms of side effects. They also avoid unnecessary air pollution and safeguard the environment.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
             
   </div>

   

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   
      <h3>upto 50% off</h3>
      <div class="content">
      <p>Get General Pest Control Service @249/- Per Room & Free Sanitization 
         <br>
      
        Pest Control For Cockroach, Termite, Bed Bug, Ant, Spider, Rodent, Rat. Herbal Pest Control, All In One Pest Control. 100% Guaranteed Result. Call Book Now.</p>
        </div>
        <a href="review.php" class="button">Comment now</a>
        <a href="package_offer.php" class="btn"> Check Now Today Special Offers<a>
        

        
</section>

     
      <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7462.568637588389!2d78.58951672314492!3d20.73926714462337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3bd47f6d5e8316db%3A0x79690fbee0ceb6c6!2sWardha%20Bus%20Stand%2C%20Mahadevpura%2C%20Wardha%2C%20Maharashtra!3m2!1d20.735926!2d78.5998584!4m5!1s0x3bd47f3da1fe0713%3A0x3574cb3e6a51be3b!2sRanibai%20Agnihotri%20Institute%20Of%20Computer%20Science%20And%20Information%20Technology%2C%20Wardha!3m2!1d20.7444785!2d78.5873968!5e0!3m2!1sen!2sin!4v1657272995319!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" class="content" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
  

<!-- home offer section ends -->







    










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