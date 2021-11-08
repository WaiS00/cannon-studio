<?php
include_once("backend/ShoppingCart.php");
include_once("backend/validation.php");

$crud = new ShoppingCart();
$validation = new Validation();

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$image = $_POST['image'];
	$price = $_POST['price'];
	
	$msg = $validation->check_empty($_POST, array('name', 'image', 'price'));
	
	if($msg) {
		echo $msg;		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {	
		$result = $crud->execute("UPDATE product_list SET name='$name',image='$image',price='$price' WHERE id=$id");
		
		header("Location: admin_product_list.php");
	}
}
?>
