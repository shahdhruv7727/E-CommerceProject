<?php
 session_start();

 if(isset($_SESSION['login_status'])){
   // echo "Illegal Attempt, Login Bypassed";
   die;
 }
 
 if( $_SESSION['login_status'] = false) {
   echo "Unauthorized Access, Forbiden";
   die;
 }
 
 if($_SESSION['usertype']="customer"){
   echo "Permission Denied, Authorization Failed";
   die;
 }

echo "<div class='padding: 25px; background-color: #fff; font-size: medium;'>";
    echo "<div>";
    echo "<h1>Welcome, $_SESSION[username]</h1>";
    echo "</div>";
    echo "<div>";
        echo "<a href='../shared/logout.php' class='text-decoration: none;'>Logout</a>";
    echo "</div>";
echo "</div>":
?>