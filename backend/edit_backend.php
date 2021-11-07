<?php
include_once("ShoppingCart.php");

$crud = new ShoppingCart();

$id = $_GET['id'];

// echo"id = $id";

$result = $crud->getData("SELECT * FROM product_list WHERE id = $id");

foreach ($result as $res) {
	$name = $res['name'];
	$image = $res['image'];
	$price = $res['price'];
}
?>