<?php
      require 'condatabase.php' ?> 
      
 <?php
     
     session_start();

     if (isset($_POST['save'] )){
  
   
      $id= $_SESSION["id"];
    
         $cover = $_POST ['cover-img'] ; 
       $personal = $_POST ['personal-img'] ;
       $facebook = $_POST ['facebook'] ;
        $insta = $_POST ['insta'] ;
        $twitter = $_POST ['twitter'] ;
        $disc = $_POST ['discreption'] ;
    $conn->query("INSERT INTO INFO-USERS (coverimg , personalimg , facebook  , insta , twitter ,discreption ,user-id) VALUES ('$cover' , '$personal', '$facebook '  ,' $insta', ' $twitter '  ,'$disc' ,'$id')")
    or die ($conn->error) ;
    header("Location: index.php"); 
      }
     
     ?>
