


            <?php require 'header.php'; ?>

      <!-- Start content section -->
      <section id="content-login-page">
        <!-- <h1 class="title text-center">Welcome To eleven Hub</h1> -->
       
        <!-- Start Form -->
        <div class="content-form text-center">
          <div class="container">
          <p class='title-form m-10'>Welcome back</p>
            <form>
            <div class="form-group">
            <label  class="label" for="Example@Gmail.Com">Email address</label>
            <input
            name="email"
              type="email"
              class="form-control"
              id="exampleInputEmail2"
              aria-describedby="emailHelp"
              placeholder="example@gmail.com"
            />
          </div>
              <div class="form-group" id="show_hide_password">
                <label class="label" for="exampleInputPassword1">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="******"
                />
                <!-- <div class="input-group-addon">
                  <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                </div> -->
              </div>

              <button type="submit" class="btn login-Page-btn">
                <a class="log-link" href="./login.html">Log in</a>
              </button>
              <div class="check">
               
                <label><input type="checkbox"> <span>Remeber Me </span> 
                <a class="forget-the-password" href="">Forget The Password?</a>
                </label>
              </div>      
              <p class="New-member-sign-up">
                New Member ? <a href="signup.php">Sign Up</a>
              </p>
            </form>

            </div> </div>
            </section>

            <?php require 'footer.php'; ?>

   

      
   
