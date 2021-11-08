<?php
require_once("backend/ShoppingCart.php");
$crud = new ShoppingCart();

$id = $_GET['id'];

//echo"id = $id";

//$result = mysqli_query($mysqli, "DELETE FROM product_list WHERE id = $id");
$result = $crud->delete($id, 'product_list');
header("location:admin_product_list.php");

?>

