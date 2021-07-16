<?php require 'header.php'; ?>
    </section>

    <!-- Start content section -->
    <section id="content-sign-page">
      <h1 class="title text-center">Welcome To The Family</h1>
      <!-- Start Form -->

      <!-- <?php
      require 'condatabase.php' ?> -->


   <form  method="POST">
          <div class="form-group">
            <label class="label" for="exampleInputEmail1">Name</label>
            <input
            name="name"
              type="text"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              placeholder="Enter Your Name Here"
            />
          </div>
          <div class="form-group">
            <label  class="label" for="Example@Gmail.Com">Email</label>
            <input
            name="email"
              type="email"
              class="form-control"
              id="exampleInputEmail2"
              aria-describedby="emailHelp"
              placeholder="example@gmail.com"
            />
          </div>
          <div class="form-group">
            <label  class="label" for="exampleInputEmail1">Specialty </label>
            <input
            name="specialty"
              type="text"
              class="form-control"
              id="exampleInputEmail3"
              aria-describedby="emailHelp"
              placeholder="Type Here"
            />
          </div>
          <div class="form-group "  id="show_hide_password">
            <label  class="label" for="exampleInputPassword1">Password</label>
            <input
            name="password"
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              placeholder="****************"
            />
            <!-- <div class="input-group-addon">
              <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
            </div> -->
          </div>
          <div class="form-group "  id="show_hide_password_repeat">
            <label  class="label" for="exampleInputPassword1">Repeat Password</label>
            <input
              type="password"
              class="form-control "
              id="exampleInputPassword2"
              placeholder="****************"
            />
            <!-- <div class="input-group-addon">
              <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
            </div> -->
          </div>
          <button type="submit" class="btn sign-Page-btn log-link" name="signup">
          Sign Up
          </button>
        </form>


        <?php
     
      
     
if (isset($_POST ['signup'] )){

    $name = $_POST ['name'] ;
    $email= $_POST ['email'] ;
    $specialty = $_POST ['specialty'] ;
    // $img = $_POST ['img'] ;
      $pass = $_POST ['password'] ;

$mysqli->query("INSERT INTO USERS ( name , email ,Specialty  , pass) VALUES ('$name' , '$email', '$specialty'  ,'$pass')")
or die ($mysqli->error) ;

 }

?>
      
      
      
    


          <div class="content">
           <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <a class="" href="">OR You Can Join With  </a>
               
              </div>
<div class="col-md-6 col-sm-6">
  <a class="forget-the-password" href="">Forget The Password?</a>
</div>
            </div>
           </div>
          


           <div>  <div></div>
         
           
          <a href=""><i class="fab fa-google icon-google"></i></a>
           <a href=""><i class="fab fa-facebook-f icon-face"></i></a>
            <a href=""><i class="fab fa-twitter icon-twitter"></i></a>
           <a href=""><i class="fab fa-instagram icon-instagram"></i></a>
           </div>
            </label>
      

    
    </section>

    <?php require 'footer.php'; ?>