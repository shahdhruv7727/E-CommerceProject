<?php
include '../shared/dbconnection.php';



$userid = $_GET['userid'];
$pid = $_GET['pid'];


$sql_result = mysqli_query($conn,"delete from cart where pid=$pid and userid=$userid");
if($sql_result) {
    header("location: viewcart.php");
}


?>