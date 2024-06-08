<?php
 include 'dbconnection.php';

 session_start();
 $_SESSION['login_status'] = false;


 $uname-$_POST['name'];
 $upass=$_POST['upass'];

 $sql_result-mysqli_query($conn,"select * from user where username='$uname' and password='$upass'");

 $no_of_rous-mysqli_num_rows($sql_result);
 if($no_of_rows == 0) {
    echo "Invalid Credentials";
    die;
 }
  echo "Login Success!";

  $dbrow = mysqli_fetch_assoc($sql_result);
  
  $_SESSION['login_status'] = true;
  $_SESSION['usertype'] = $dbrow['usertype'];
  $_SESSION['userid'] = $dbrow['userid'];
  $_SESSION['username'] = $dbrow['username'];



  if ($dbrow['usertype']=='vendor'){
    header("location:../vendor/home.html");
  }
  else if($dbrow['usertype']=='customer'){
    header("location:../customer/home.html");
  }
//   header("location: ../vendor/home.html");
 
?>