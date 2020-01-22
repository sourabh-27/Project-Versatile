 <?php
 
session_start();
if(isset($_SESSION['email'])){
  header('location:index2.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Font Awesome 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">-->

     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--Jquery CDN-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

   <!-- Animinate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <style type="text/css">
    .A{
      background-image: linear-gradient(to right, #DC2424 , #4A569D);
      height: 350px;
    }
    .B{
      background-image: linear-gradient(to right, #E0EAFC , #CFDEF3);
    }
    
  </style>
</head>
<body>

<!-- Start Nagigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top" style="background-color:#25274D !important ">
    <a href="index.php" class="navbar-brand">Versatile</a>
    <span class="navbar-text">Create Challenge Conquer</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#courses" class="nav-link">Courses</a></li>
        <li class="nav-item"><a href="#team" class="nav-link">Team</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      
   <li class="nav-item" id="1"> <a href="login.php"> <button type="button" class="btn btn-danger" style="margin-right: 8px;">Login</button></a></li>

   <li class="animated infinite pulse delay-2s"><a href="signup.php"> <button type="button" class="btn btn-danger">Register Now
   </button></a></li> 
  </ul>
 </div>

  </nav> <!-- End Navigation -->







  <!-- First container -->
<div class="container-fluid A">
    <h3 class="text-white text-center wow slideInDown" style="padding-top: 140px;">Our Mission</h3>
    <p class="text-white text-center wow zoomIn delay-1s">To change the face of Tech Education in India</p>
</div>
<!-- end -->

<!-- Main contianer -->
<div class="container-fluid B">
  <div class="row">
    <!-- About us -->
    <div class="container">
      <h3 class="text-center" style="color: black;">ABOUT US</h3>
      <p style="text-align: center;">There is a reason why we take pride in branding ourselves the best programming language institute in Delhi. Our instructors, graduates from Stanford University, IITs, IIITs, are Master craftsmen with years of industry experience at Facebook, Amazon, American Express, Times Internet, etc. At Coding Ninjas, our mission is to continuously innovate the best ways to train the next generation of developers and to transform the way tech education is delivered. We’re constantly evolving the ways in which we train amazing developers, as staying stagnant is not an option. We approach our educational philosophy as a never-ending journey of self-improvement, and we apply it to everything we do</p>
    </div>
    <!-- end -->

    <!-- What seprate us -->
    <!-- First row -->
    <div class="container">
      <h3 class="text-center" style="color: black;">What Separates Us?</h3>
      <div class="row">
      <div class="col-md-8">
        <h5 style="color: black;">Educators First, Developers Second</h5>
        <p>Education is about more than conveying information - it's about understanding how people think, learn, and truly grasp the material at hand. We understand that every new concept requires a unique approach, and that even the most advanced subject-matter experts must also be well-trained educators to produce great results. That's why all of our Lead Instructors are experienced educators as well as professional developers.</p>
      </div>
      <div class="col-md-4 wow fadeInRight delay-2s">
        <img src="images/b.png" style="width: 350px; height: 200px;">

      </div>
    </div>
    </div>
    <!-- End of first row -->

    <!-- Second row -->
    <div class="container">
      <div class="row">
      
      <div class="col-md-4 wow fadeInLeft delay-1s">
      <img src="images/d.png" style="width: 350px; height: 200px;">
      </div>
      
      <div class="col-md-8">
        <h5 style="color: black;">Custom Curriculum Created by Expert Educators</h5>
        <p>The Actualize program is designed and taught by our educator/developer Lead Instructors. Together, we created our curriculum using educational best practices and careful consideration of how people learn and retain information. We've debated every facet of our methodology, from the order in which to teach concepts and the analogies used to clarify them to how exercises should be structured to deliver the maximum educational punch.</p>
      </div>

    </div>
    </div>
    <!-- End of second row -->

    <!-- Third row -->
    <div class="container">
      
      <div class="row">
      <div class="col-md-8">
        <h5 style="color: black;">Keep Your Current Job While You Switch Careers</h5>
        <p>Whether you are student of working professional, we believe that you don't need to quit your current job and put your life on hold to learn to code. Choices between weekend/weekdays offline classe courses, flexibility over online programs and excellent curriculum and top-notch educators like ours, you can learn more in less time. Our alumni have proven this again and again.</p>
      </div>
      <div class="col-md-4 wow fadeInRight delay-1s">
        <img src="images/e.png" style="width: 350px; height: 200px;">

      </div>
    </div>
    </div>
    <!-- End of third row -->

  </div>
  
</div>
<!-- Main container end -->

<!-- Card section -->
<div class="container-fluid ">
  <h3 class="text-center" style="color: black; padding-top: 10px;">Why Learn Programming ONLINE At Versatile?</h3>
  <div class="row">
    <div class="col-md-3 col-xs-12">
      <div class="card wow slideInUp delay-1s" style=" border: none;">
         <img src="images/g.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title text-center">Foundation</h5>
    <p class="card-text text-center">We are one of the computer programming courses in Delhi that start from scratch, introducing you to the concepts of how software is designed and implemented.</p>
  </div>
  </div>
  </div>

  <div class="col-md-3 col-xs-12">
      <div class="card wow slideInUp delay-1s" style=" border: none;">
         <img src="images/h.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title text-center">Immersion</h5>
    <p class="card-text text-center">Our programming courses immerse you in learning. There are no large lecture halls here, no inexperienced teacher’s aides, and no “only theories”.</p>
  </div>
  </div>
  </div>

  <div class="col-md-3 col-xs-12">
      <div class="card wow slideInUp delay-1s" style=" border: none;">
         <img src="images/i.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title text-center">Reinforcement</h5>
    <p class="card-text text-center">We have hundreds of topics to practice, assignments, exercises, and projects to reinforce your learning.We will challenge you with coding quizzes.</p>
  </div>
  </div>
  </div>

  <div class="col-md-3 col-xs-12">
      <div class="card wow slideInUp delay-1s" style="border: none;">
         <img src="images/k.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title text-center">Mastery</h5>
    <p class="card-text text-center">Your journey does not end after completion of course. We, want to stay involved with our students even after course completion.</p>
  </div>
  </div>
  </div>

</div>
</div>
<!-- Card section end -->

<!-- Wow js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<!-- end -->


  
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
</html>