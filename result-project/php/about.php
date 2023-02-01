<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

   <!-- aos -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box" data-aos="fade-down" data-aos-duration='1000'
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" >
         <img src="../images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>These important factors, when viewed all together, gives us the vision to create your website with overall benefits for you. A unique combination of other factors is what our internal team agenda goes through that helps us to come up with more than a website.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box" data-aos="fade-up" data-aos-duration='1000'
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" >
         <img src="../images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Here we provide a lot for you. If you want to buy household needs for everyday, we have prepared ingredients for processing, such as vegetables, meat, and fruits. We will provide the best service for you.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container" >

      <div class="box" data-aos="fade-down" data-aos-duration='600'
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
         <img src="../images/pic-1.png" alt="">
         <p>This website really helps me in buying and selling transactions. With this I can easily buy daily necessities. I am very satisfied with the service provided. I highly recommend people out there to try this selling app (Benemart) even though it was launched recently.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maudy Ayunda</h3>
      </div>

      <div class="box" data-aos="fade-down" data-aos-duration='800'
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
         <img src="../images/pic-2.png" alt="">
         <p>The features provided in the benemart application are quite good and very user friendly. From front to back, in my opinion, it is quite good and can be said to be able to compete with top selling applications, such as Shoppe, Tokopedia, and Blibli.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ricky Harun</h3>
      </div>

      <div class="box" data-aos="fade-down" data-aos-duration='1000'
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
         <img src="../images/pic-3.png" alt="">
         <p>I am very pleased with the existence of benemart which is a website-based buying and selling application. In terms of appearance, it is very interesting for users to use this application. I am quite satisfied with the features provided</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Afgansyah Reza</h3>
      </div>

      <div class="box" data-aos="fade-down" data-aos-duration='1200'
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
         <img src="../images/pic-4.png" alt="">
         <p>The features provided in the benemart application are quite good and very user friendly. From front to back, in my opinion, it is quite good and can be said to be able to compete with top selling applications, such as Shoppe, Tokopedia, and Blibli.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jerome Polin</h3>
      </div>

      <div class="box" data-aos="fade-down" data-aos-duration='1400'
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
         <img src="../images/pic-5.png" alt="">
         <p>I am very pleased with the existence of benemart which is a website-based buying and selling application. In terms of appearance, it is very interesting for users to use this application. I am quite satisfied with the features provided</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Raisa</h3>
      </div>

      <div class="box" data-aos="fade-down" data-aos-duration='1600'
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
         <img src="../images/pic-6.png" alt="">
         <p>This website really helps me in buying and selling transactions. With this I can easily buy daily necessities. I am very satisfied with the service provided. I highly recommend people out there to try this selling app (Benemart) even though it was launched recently.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Raline Syah</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="../js/script.js"></script>
<!-- aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


</body>
</html>