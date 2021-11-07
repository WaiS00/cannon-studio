<?php
//including the database connection file
require_once("backend/ShoppingCart.php");
$crud = new ShoppingCart();

$id = $_GET['id'];

echo"id = $id";

//deleting the row from table
//$result = mysqli_query($mysqli, "DELETE FROM product_list WHERE id = $id");
$result = $crud->delete($id, 'product_list');

?>

