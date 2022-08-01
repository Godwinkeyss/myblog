<?php
 $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
?>

  

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>php crud</title>
</head>
<body>
   
    <h1>Create new Product</h1>
   
    <form>
      <div class="mb-3">
          <label class="mb-2">Product Image</label><br />
          <input type="file" >
      </div>
      <div class="mb-3 form-group">
          <label>Product Title</label>
          <input type="text" class="form-control" >
      </div>
      <div class="mb-3">
          <label>Product Description</label>
         <textarea class=" form-control"></textarea>
      </div>
      <div class="mb-3">
          <label>Price</label>
          <input type="number" step='.01' class="form-control" >
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>