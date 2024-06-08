<?php 
include '../shared/dbconnection.php';

session_start();


$source = $_FILES['pdtimg']['tmp_name'];
$dest = "../shared/images/".$_FILES['pdtimg']['name'];
move_uploaded_file($source, $dest);

$status=mysqli_query($conn,"insert into product (name, price, detail, impath, owner) values("$_POST[name]","$_POST[price]","$_POST[detail]", $dest,$_SESSION[userid])");

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading Product</title>
</head>
<body>
    
</body>
</html> -->