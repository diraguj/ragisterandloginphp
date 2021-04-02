<?php


if(isset($_POST["submit"]))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$tmp_name=$_FILES['image']['tmp_name'];
    $prof=$_FILES['image']['name'];
    $tr=move_uploaded_file($tmp_name,"image/".$prof);


	$con=mysqli_connect("localhost:3308","root","","student");
	
	$insert="insert into user (id,fname,lname,email,dob,password,image) values ('NULL','$fname','$lname','$email','$dob','$password','$prof')";

	if (mysqli_query($con, $insert)) {
	  header("location: login.php");
	  
	} else {
	  echo "Error: " . $insert . "<br>" . mysqli_error($con);
	}

	mysqli_close($con);



}


?>
