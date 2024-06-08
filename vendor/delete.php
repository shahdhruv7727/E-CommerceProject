<?php
include '../shared/dbconnection.php';


$pid = $_GET['pid'];


$sql_result = mysqli_query($conn,"delete from product where pid=$pid");
if($sql_result) {
    header("location: view.php");
}


?>