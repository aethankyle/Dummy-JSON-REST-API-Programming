<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
'base_uri' => 'https://dummyjson.com/'
]);

$products = [
'json' => [

'title' => 'ASUS L210',
'description' => 'ASUS Laptop meets a wide range of exclusive usability features, a diverse color choice, and always-great affordability for everyone.',
'price' => '10206',
'brand' => 'ASUS',
'category' => 'LAPTOPS',
'thumbnail' => 'https://dlcdnwebimgs.asus.com/gain/d895a2b9-233a-4f11-91fd-b22788ac973f/'
]
];

$response = $client->post('https://dummyjson.com/products/add', $products);
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
<title>Add Product</title>
</head>
<body>
<div class = "container">
<table class="table table-secondary">
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
<td><?=$product->title?></td>
<td><?=$product->description?></td>
<td><?=$product->price?></td>
<td><?=$product->brand?></td>
<td><?=$product->category?></td>
<td><img src="<?=$product->thumbnail?>"width="100px"></td>
</tr>
</tbody>
</table>

</body>
</html>