<?php
$profpic = "photos/home.jpg";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <Link rel="stylesheet" href="login.css">
    
    
    <link rel="icon" href="photos/logo.jpg" />

</head>
<body>
<style type="text/css">
{
    background-image: url('<?php echo $profpic;?>');
    background-repeat:no-repeat;
    background-size:cover;
}

</style>
  <header>

        <a href="#" class="brand"><img src="photos/logo.jpg" alt="" /></a>
        <div class="menu-btn"></div>

        <div class="bx bx-menu" id="menu-icon"></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            
        </div>
        <div class="menu-bar">
            <ul class="navbar">
                <li class="active">
                    <a href="index.html">Home</a>

                </li>
                <li>
                    <a href="services.html">Services</a>
                    <div class="sub-menu-1">

                        <ul>
                            <li><a href="aboutus.html">Lube & oil Services</a></li>
                            <li><a href="aboutus.html">Computer & Electrical Work Analysis</a></li>
                            <li><a href="aboutus.html">Auto Transmis Diagnose & service</a></li>
                            <li><a href="aboutus.html">Engine Over Hawl & Repair</a></li>
                            <li><a href="aboutus.html">Car Wash</a></li>
                            <li><a href="aboutus.html">Body Repair & Paint </a></li>
                            <li><a href="aboutus.html">Clutch Repair </a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="aboutus.html">About Us</a>
                    <div class="sub-menu-1">

                        <ul>
                            <li><a href="aboutus.html">Company Profile</a></li>
                            <li><a href="aboutus.html">Our History</a></li>
                            <li><a href="aboutus.html">Our Mission</a></li>
                            <li><a href="aboutus.html">Our Vision</a></li>
                            <li><a href="aboutus.html">Our Team</a></li>
                            <li><a href="aboutus.html">Our Partners</a></li>

                        </ul>
                    </div>
                </li>

                <li><a href="#home">Join-Us</a>
                    <div class="sub-menu-1">

                        <ul>
                            <li><a href="#">Training</a></li>
                            <li><a href="#">Career</a></li>
                            

                        </ul>
                    </div>
                </li>
                <li><a href="#home">Contacts</a></li>
                <li><a href="http://localhost/spares/login.php">Login</a></li>
            </ul>
        </div>
    </header>
    <div class="login-container">
        <h2>Login Form</h2>

        <form action="login process.php" method="POST">
          <div class="form-group">
            <label for="username">Admin:</label>
            <input type="text" id="user" name="username" required><br><br>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="pass" name="password" required><br><br>
          </div>
          <div class="form-group">
            <button class="button" type="submit" id="btn" name="login" default>Login</button>
          </div>
        </form>
   </div>
   <script>
    hamburger = document.querySelector(".hamburger");
    hamburger.onclick = function () {
        menuBar = document.querySelector(".menu-bar");
        menuBar.classList.toggle("active");
    }

</script>
</body>
</html>