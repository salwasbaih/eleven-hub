<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/splide.min.css">
  <link rel="stylesheet" href="css/splide-core.min.css">
</head>
<body>


<?php
      require 'condatabase.php' ?> 


<nav class="navbar navbar-expand-lg navbar-light ">
   
      <div class="row  main-head">
        <div class="col-md-3 text-center">
          <a class="navbar-brand" href="index.php">
            <img src="./imges/logo.png" alt="">
          </a>
        </div>
        <div class="col-md-6">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse  pt-4" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="#">Main <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <?php
      session_start();
   if(isset($_SESSION['id'])){
      echo '
      <li class="nav-item">
      <a class="nav-link" href="members.php">members</a>
    </li>';
      }else{
    echo '';
   
      } ?>



      
          </ul>
        
        </div>
       
        </div>


        <div class="col-md-3 pt-4">

      <?php
      // session_start();
   if(isset($_SESSION['id'])){
      echo '
      <a href="signup.php" class="" role="button" aria-pressed="true"><img src="imges/t2.jpg" alt="" style="width:60px; height: 60px;" class="rounded-circle"></a>
      <a class="login-btn" href="logout.php" style="text-decoration:none">logout</a>';
      }else{
    echo '
    <a href="signup.php" class="sign-btn" role="button" aria-pressed="true">Sign up</a>
    
    <a class="login-btn" href="login.php" style="text-decoration:none">login</a>';
      } ?>

</div>
         
          <!-- <a class="login-btn" href="login.php">Login</a>
          <a href="signup.php" class="sign-btn" role="button" aria-pressed="true">Sign up</a> -->
        
     
<form action="logout.php"  method="POST" >
      <div class="col-md-4 pt-4">
         
         <!-- <a class="login-btn" href="login.php">2222n</a> -->
         <!-- <a href="logout.php" class="" role="button" aria-pressed="true">log out</a> -->
         </form>
     </div> 



      </div>
    
   
      
    </div>
  
  </nav>