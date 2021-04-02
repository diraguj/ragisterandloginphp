<?php
        session_start();

  if(isset($_POST["submit"]))
  {


    $email=$_POST['email'];
    $password=$_POST['password'];
   
   
    $con=mysqli_connect("localhost:3308","root","","student");
    
   

      $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if($count == 1) {

        $_SESSION['email'] = $email;
        header("location:home.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }
   }

?>

<!DOCTYPE html>
<html>
<head>
  <script src="jquery.min.js"></script>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

<h2>Login Form</h2>

<form action="#"  method="POST">
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" ><span id="email_error"></span><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" ><span id="password_error"></span><br><br>
  <input type="submit" id="submit" name="submit" value="submit" />   
  <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(isset($error)) {echo $error; } ?></div>
</form> 
<script >
  $(document).ready(function(){
    $('#submit').click(function(){

      var email=$("#email").val();
       var password=$("#password").val();
       
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
      else{
                $('#password_error').text(" "); 
                $('#password_error').css('color','red'); 
      }
      
      if(email==""||password==""){
                return false;        

      }
      if(email!=""||password!="") {
                return true;        
      }

    });
  });
</script>

</body>
</html>
