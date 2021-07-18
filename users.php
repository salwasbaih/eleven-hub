 
     <?php
      require 'condatabase.php' ?> 
 <?php
     
     if (isset($_POST ['signup'] )){
     
         $name = $_POST ['name'] ;
         $email= $_POST ['email'] ;
         $specialty = $_POST ['specialty'] ;
         // $img = $_POST ['img'] ;
           $pass = $_POST ['password'] ;
     
     $conn->query("INSERT INTO USERS ( name , email ,Specialty  , password ) VALUES ('$name' , '$email', '$specialty'  ,'$pass')")
     or die ($conn->error) ;
     header("Location: index.php"); 
      }
     
     ?>