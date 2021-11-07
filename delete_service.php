<?php
require_once("backend/ShoppingCart.php");
$crud = new ShoppingCart();

$id = $_GET['id'];

//$result = mysqli_query($mysqli, "DELETE FROM services WHERE id = $id");
$result = $crud->deleteService($id, 'services');
header("location:admin_service_list.php");

?>

