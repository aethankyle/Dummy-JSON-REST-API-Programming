<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$products = [
  'json' => [
  'title' => 'Acer Aspire 7 A715-42G-R5C5 Black',
  'description' => 'Display Size: 15.6-inchResolution: Full HD (1920 x 1080)Operating System: Windows 11Hard Drive Capacity: 512GB SSDProcessor:',
  'price' => '40999',
  'brand' => 'ACER',
  'category' => 'LAPTOPS',
'thumbnail' => 'https://d1rlzxa98cyc61.cloudfront.net/catalog/product/cache/1801c418208f9607a371e61f8d9184d9/1/8/182082_2022.jpg',
  ]
];

$response = $client->put('https://dummyjson.com/products/1', $products);
$code = $response->getStatusCode();
$body = $response->getBody();
$product = json_decode($body);
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
<div class = "container"> 
        <table class="table table-bordered table-dark">
                <thead>
                        <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Category</th>
                                <th scope="col">Thumbnail</th>
                        </tr>
                </thead>
        <tbody>
                <tr>
                <th scope="row" href="single-product.php"><?= $product->id ?></th>
                <td><?= $product->title?></td>
                <td><?= $product->description?></td>
                <td><?= $product->price?></td>
                <td><?= $product->brand?></td>
                <td><?= $product->category?></td>
                <td><img src="<?=$product->thumbnail?>"width="100px"></td>
                </tr>
        </tbody>
</table>
    
</body>
</html>