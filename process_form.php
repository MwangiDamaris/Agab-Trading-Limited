<?php 
$con=mysqli_connect("localhost","root","","login_db");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO client (name, email, message) VALUES('$name','$email','$message')";
$result = mysqli_query($con, $query);

if ($result) {
	echo"<script type='text/javascript'>alert('Message submitted successfully ');
             document.location='index.html'</script>";
} else {
	echo"Error: ". mysqli_error($con);
}

mysqli_close($con);
?>