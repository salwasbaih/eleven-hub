<?php require 'header.php'; ?>
<?php
      require 'info-users.php' ?> 

<form action="info-users.php" method="POST" >
  
<section  class="editprof">
 
  <div class="upload-circle text-center">
        <label for="files" class="btn-circle  " style="display: block;">
          <i class="fas fa-plus-circle"></i>
          <!-- <i class="fas fa-user-circle"></i> -->
        </label>
        <input name="cover-img"  id="files" style="visibility: hidden" type="file" />
      </div> 
      <div class="container">
      <div class="row">
        <div class="col-md-6">
        <div class=" ">
        <label for="files" class="btn-circle text-right " style="display: block;">

       <div class="addphoto"> 
        <img src="imges/user.svg" alt="" >
       </div> 
        
        </label>
        <input   name="personal-img"  id="files" style="visibility: hidden" type="file" />

        </div>  </div>
        <div class="col-md-6">
        <div class="social">
       <button type="button" class="btn " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">  <a href=""> 
        <i class="fab fa-facebook"></i>
        <i class="fas fa-plus-circle"></i>
        </a></button>
        <button type="button" class="btn " data-toggle="modal" data-target="#exampleModall" data-whatever="@mdo">  <a href=""> 
        <i class="fab fa-instagram"></i>
        <i class="fas fa-plus-circle"></i>
        </a></button>
        <button type="button" class="btn " data-toggle="modal" data-target="#exampleModalll" data-whatever="@mdo">  <a href=""> 
        <i class="fab fa-twitter"></i>
        <i class="fas fa-plus-circle"></i>
        </a></button>
       </div>

        </div>
      </div>
    
      </div>




    </section>
  
<div class="container ">
 <section class="editprofile my-5">
    <div class="mb-3">
    <?php
            $get_news_sql = "SELECT * FROM `USERS`";
            $get_news_sql = mysqli_query($conn, $get_news_sql);
            while ($row = mysqli_fetch_array($get_news_sql)) {
              	echo $row['id'];
             echo $row['name']; 
            }
          ?>
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" <?php	echo $row['name']; ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Specialty</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="type here">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Describe your specality</label>
    <textarea name=" discreption" id="" cols="30" rows="10" class="w-100" style="display: block;"  placeholder="type here"></textarea>
    </div>
    <div class="form-group">
      <label for="recipient-name" class="col-form-label">  
      Enter your Facebook account link 
    
      </label>
      <input  name="facebook" type="text" class="form-control" id="recipient-name">
    </div>
    <div class="form-group">
      <label for="recipient-name" class="col-form-label">  
      Enter your Instagram account link 
    
      </label>
      <input type="text" name="insta" class="form-control" id="recipient-name">
    </div>
    <div class="form-group">
      <label for="recipient-name" class="col-form-label">  
      Enter your Twitter account link 
    
      </label>
      <input type="text"  name="twitter"  class="form-control" id="recipient-name">
    </div>

    <div class="text-center Save-btn">
      <button name="save" type="submit" class="btn ">Save</button>

    </div>


 </section>

    
</div>



      



</form>
<?php require 'footer.php'; ?>
