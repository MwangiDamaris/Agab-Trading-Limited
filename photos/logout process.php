<?php session_start();
if(empty($_SESSION['id'])):
    header('location:login.php');
endif;
?>
<!DOCTYPE html>
<html>

<body>
   <div style="width:150px; margin:auto; height:500px;color:red; margin-top:300px">   

   <?php
    include('database connection.php');
    session_destroy();

    echo '<meta http-equiv="refresh" content="2;url=login.php">';
    echo '<progress max=100><strong>progress: 60% 
          done.</strong></progress><br>';
    echo '<span class="itext">Logging out please wait!....</span>';

   ?>
   </div>

</body>
</html>