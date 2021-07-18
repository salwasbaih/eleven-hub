<?php

require 'condatabase.php'?>
<?php  
if(isset($_POST['login']))
{
    session_start();

    // extract($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql=mysqli_query($conn,"SELECT * FROM users where email='$email' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
         $_SESSION["id"] = $row['id'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["password"]=$row['password'];
        header("Location: index.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>