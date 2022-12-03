<?php
include('../includes/connect.php');

if (isset($_POST['insert_product'])){

    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    // images 
    $product_image = $_FILES['product_image']['name'];

    //temp name
    $product_image_temp = $_FILES['product_image']['tmp_name'];

    if ($product_description == '' or $product_price == '' or $product_image == '' or $product_name == '')
    {
        echo '<script type="text/javascript> alert ("Please fill all available fields"); </script>';
        exit();
    } else{
        move_uploaded_file($product_image_temp, "./product-images/$product_image");
        
        //add product
        $sql = "insert into `products` (product_name, product_description, product_image, product_price, date, product_status) values ('$product_name', '$product_description', '$product_image', '$product_price', NOW() ,'$product_status')";

        $result=mysqli_query($con, $sql);

        if ($result === TRUE){
                echo "successfully added products";
            } else  {
                echo "unsuccessful"; 
            }
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/45c92c3ef1.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
</head>
<body>

<div class="container mt-3">
    <h1 class="text-center">Add products</h1>

    <!-- form -->
    <form action="" method="post" enctype="multipart/form-data">
        <!-- title -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_name" class="form-label">Product name</label>
            <input placeholder="E.g Jeans" type="text" name="product_name" id="product_name" class="form-control" autocomplete="off" required> 
        </div>

        <!-- description -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_description" class="form-label">Product description</label>
            <input placeholder="E.g Levis denim jeans" type="text" name="product_description" id="product_description" class="form-control" autocomplete="off" required> 
        </div>

        <!-- image  -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image" class="form-label">Product image</label>
            <input placeholder="E.g Levis denim jeans" type="file" name="product_image" id="product_image" class="form-control" required> 
        </div>

        <!-- price  -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">Product price</label>
            <input placeholder="E.g R5000" type="number" name="product_price" id="product_price" class="form-control" autocomplete="off" required> 
        </div>

        <!-- submit  -->
        <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" id="insert_product" class="btn btn-info mb-3 p-3" value="insert_product"> 
        </div>

   
    </form>
</div>
    







<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>