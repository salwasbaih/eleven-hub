$(function(){
    
     new WOW().init();
     $("#files").change(function() {
      filename = this.files[0].name
      console.log(filename);
    });

    $('.btn').click(function() {
   
      $(".remove").removeClass("remove");
      $(this).addClass("selected");
      });
     
      $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }
        else if($('#show_hide_password input').attr("type") == "password")
        {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
        
    });
    $("#show_hide_password_repeat a ").on('click', function(event) {
      event.preventDefault();
      if($('#show_hide_password_repeat input').attr("type") == "text"){
          $('#show_hide_password_repeat input').attr('type', 'password');
          $('#show_hide_password_repeat i').addClass( "fa-eye-slash" );
          $('#show_hide_password_repeat i').removeClass( "fa-eye" );
      }
      else if($('#show_hide_password_repeat input').attr("type") == "password")
      {
          $('#show_hide_password_repeat input').attr('type', 'text');
          $('#show_hide_password_repeati').removeClass( "fa-eye-slash" );
          $('#show_hide_password_repeat i').addClass( "fa-eye" );
      }
      
  });



  var password = document.getElementById("show_hide_password")
    , confirm_password = document.getElementById("show_hide_password_repeat");
  
  function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
      confirm_password.setCustomValidity('');
    }
  }
  
  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;




})

