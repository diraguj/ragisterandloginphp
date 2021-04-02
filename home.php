<?php 

session_start();
error_reporting(0);
$email=$_SESSION['email'];

if(!$_SESSION['email']){
        header("location:login.php");

}

?>

<html>
   <head>
      <title>Welcome </title>  
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
            <a class="nav-link " href="logout">logout</a>
          </li>
        </ul>
      </div>
    </nav>

      <h1>Welcome <?php echo "$email"; ?></h1> 
   		 <table class="table">
		    <thead>
		      <tr>
		        <th>Firstname</th>
		        <th>Lastname</th>
		        <th>Email</th>
		        <th>Date Of Birth</th>
		        <th>Image</th>
		      </tr>
		    </thead>
		    

		    <tbody>
		      <tr>
		      	<?php
		      	  $con=mysqli_connect("localhost:3308","root","","student");
   
		      	  $sql = "SELECT * FROM user WHERE email = '$email'";
    			  $result = mysqli_query($con,$sql);
      			  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    
		      	?>
		        <td><?php echo $row['fname']; ?></td>
		        <td><?php echo $row['lname']; ?></td>
		        <td><?php echo $row['email']; ?></td>
		        <td><?php echo $row['dob']; ?></td>
		        <td><img src="./image/<?php echo $row['image']; ?>" width="100" height="100" alt="image"></td>
		      
		      </tr>
		    </tbody>
		  </table>



   </body>
   
</html>