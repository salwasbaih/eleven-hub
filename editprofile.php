<?php require 'header.php'; ?>
    <section  class="editprof">
     
        <div class="upload-circle text-center">
        <label for="files" class="btn-circle  " style="display: block;">
          <i class="fas fa-plus-circle"></i>
          <!-- <i class="fas fa-user-circle"></i> -->
        </label>
        <input id="files" style="visibility: hidden" type="file" />
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
        <input id="files" style="visibility: hidden" type="file" />

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

      
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facebook</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">  
            Enter your Facebook account link 
          
            </label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary save-btn">save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Instagram</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">  
            Enter your Instagram account link 
          
            </label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary save-btn">save</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Twitter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">  
            Enter your Twitter account link 
          
            </label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary save-btn">save</button>
      </div>
    </div>
  </div>
</div>





      
     
      </div> 
    </section>
<div class="container ">
 <section class="editprofile my-5">
  <form class="p-5 ">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name Here">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Specialty</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="type here">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Describe your specality</label>
    <textarea name="" id="" cols="30" rows="10" class="w-100" style="display: block;"  placeholder="type here"></textarea>
    </div>
    <div class="text-center Save-btn">
      <button type="submit" class="btn ">Save</button>

    </div>

  </form>
 </section>

    
</div>


<?php require 'footer.php'; ?>
