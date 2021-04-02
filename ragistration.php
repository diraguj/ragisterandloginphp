<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">login_function</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ragistration.php">Ragister</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>


<h2>Ragistation Form</h2>

<form action="./action.php" enctype="multipart/form-data" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><span id="fname_error"></span><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><span id="lname_error"></span><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" ><span id="email_error"></span><br>
  <label for="dob">Date of Birth:</label><br>
  <input type="date" id="dob" name="dob" ><span id="dob_error"></span><br>
  <label for="image">Profile Image:</label><br>
  
  <input type="file" name="image" id="image" /><span id="image_error"></span><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" ><span id="password_error"></span><br>
<label for="cpassword">Confirm password:</label><br>
  <input type="password" id="cpassword" name="cpassword" ><span id="cpassword_error"></span><br><br>
  <!-- <button type="submit" id="submit" value="submit">Submit</button>    -->
  <input type="submit" id="submit" name="submit" value="submit" />   

</form> 
<script >
  $(document).ready(function(){
    $('#submit').click(function(){

      // alert("helo");
       var fname=$("#fname").val();
       var lname=$("#lname").val();
       var email=$("#email").val();
       var password=$("#password").val();
       var password_len=$("#password").val().length;

       var cpassword=$("#cpassword").val();
       
       if(fname==""){
          $('#fname_error').text("plase enter your first name "); 
          $('#fname_error').css('color','red');
       }
       else{
        $('#fname_error').text(" "); 
          $('#fname_error').css('color','red');
        
       }
      if(lname==""){
                $('#lname_error').text("plase enter your last name "); 
                $('#lname_error').css('color','red'); 
      }
      else{
                $('#lname_error').text(" "); 
                $('#lname_error').css('color','red');
      }
      if(email==""){
                $('#email_error').text("plase enter your email "); 
                $('#email_error').css('color','red'); 
      }
      else{
                $('#email_error').text(" "); 
                $('#email_error').css('color','red');   
      }
      if(password==""){
                $('#password_error').text("plase enter your password "); 
                $('#password_error').css('color','red'); 
      }
      else if(password_len <= 8)
      {
                $('#password_error').text("password length lessthen 8 character "); 
                $('#password_error').css('color','red'); 
                return false;        
                
      }
      else{
                $('#password_error').text(" "); 
                $('#password_error').css('color','red'); 
      }
      if(cpassword==""){
                $('#cpassword_error').text("plase enter your cpassword "); 
                $('#cpassword_error').css('color','red'); 
      }
      else if(password != cpassword){
          $('#cpassword_error').text("conform password not match "); 
                $('#cpassword_error').css('color','red'); 
                return false;        
      
      }
      else{
                $('#cpassword_error').text(""); 
                $('#cpassword_error').css('color','red');   
      }
      $("#image").change(function() {

          var val = $(this).val();

          switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
              case 'gif': case 'jpg': case 'png':
                  $('#image_error').text(" "); 
                  $('#image_error').css('color','red');
                  break;
              default:
                  $(this).val('');
                  // error message here
                  $('#image_error').text("plase enter jpg ,png or gif "); 
                  $('#image_error').css('color','red');
                  break;
          }
      });

      if(lname==""||fname==""||email==""||password==""||cpassword==""){
                return false;        

      }
      if(lname!=""||fname!=""||email!=""||password!=""||cpassword!="") {
                return true;        
      }

    });
  });
</script>

</body>
</html>
