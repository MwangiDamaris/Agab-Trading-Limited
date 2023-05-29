<?php session_start();
if(empty($_SESSION['id'])):
    header('location:login.php');
endif;
?>


<!DOCTYPE html>
<html>
<head>
    <title>Home page </title>
</head>
<body>
   <div style="float:right"><a href="logout process.php"><button>Logout</button></a></div>

   <h1>Welcome to home page....!</h1>
</body>
</html>
