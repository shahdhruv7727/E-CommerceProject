<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Product Display</title>
  <style>
    .card-img-top {
      width: 100%;
      height: 200px; 
      object-fit: cover; 
    }
  </style>
</head>
<body>
<?php 
include '../shared/dbconnection.php';
include 'authguard.php';
include 'menu.html';


$sql_result = mysqli_query($conn,"select * from product where owner=$_SESSION[userid]");
$dbrow=mysqli_fetch_assoc($sql_result);

echo "<div class='row'>"; 

foreach ($dbrow as $item) { 
  echo "  <div class='col-sm-4 col-md-3 col-lg-2'>"; 
  echo "    <div class='card mb-3'>"; 

  
  echo "      <img src='" . $item['impath'] . "' class='card-img-top img-fluid' alt='" . $item['name'] . " image'>";

  echo "      <div class='card-body'>";
  echo "        <h5 class='card-title'>" . $item['name'] . "</h5>";
  echo "        <p class='card-text'>$" . $item['price'] . "</p>";
  echo "        <p class='card-text'>" . $item['detail'] . "</p>";
  echo "      </div>";

  echo "      <div class='card-footer'>"; 
  echo "        <a href='#'><button class='btn btn-primary'>Edit</button></a>"; 
  echo "        <a href='delete.php?pid=$dbrow[pid]'><button class='btn btn-danger'>Delete</button></a>";
  echo "      </div>";

  echo "    </div>"; 
  echo "  </div>";
}

echo "</div>"; 
?>
</body>
</html>