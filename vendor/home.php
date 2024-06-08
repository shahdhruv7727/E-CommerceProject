<?php

include 'authguard.php';

include 'menu.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor's Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body>
<div class="d-flex justify-content-center align-items-center
   vh-100">
   <form action="upload.php" method="POST" class="w-50 bg-primary p-4">
   <h3 class="mb-3 text-center bg-primary p-2 rounded text-white">Add New Product</h3>
   <input class="form-control mt-3" type="text"
      placeholder="Product Name" name="name">
   <input class="form-control mt-2" type="text"
      placeholder="Product Price" name="price">
   <textarea placeholder="Add Product Description" class="form-control mt-2" name="detail" id=""
   cols="10" rows="5"></textarea>
   <input class="form-control nt-2" type="file" name="pdfimg"
      accept=".jpg,.png">
      <button class="btn btn-primary w-100">Add Product</button>
   </form>
</div>
</body>
</html>