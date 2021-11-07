<?php 

require_once 'SQL_login.php';

if(isset($_POST['name']) && isset($_POST['category'])){

$name = sanitise($pdo,$_POST['name']);
$category = sanitise($pdo,$_POST['category']);
$code = sanitise($pdo,$_POST['code']);
$tbl_name = 'product_list';
$image    = sanitise($pdo,$_POST['image']);  
$price    = sanitise($pdo,$_POST['price']);  

if ($_POST['name'] == "" || $_POST['category'] == "" || $_POST['code'] == "" || $_POST['image'] == "" || $_POST['price'] == "") {
  echo "<script type='text/javascript'>alert('Field not filled');</script>";
}else{
  $query = "INSERT INTO $tbl_name (id, name, category, code, image, price) 
  VALUES(NULL,$name, $category, $code, $image , $price)";

  $result = $pdo->query($query);

  echo "<script type='text/javascript'>alert('Added Successfully');</script>";
  echo "<script type='text/javascript'>window.location.href = './admin_product_list.php';</script>";
}

}
else{
}

function sanitise($pdo, $str)
{
$str = htmlentities($str);
return $pdo->quote($str);
}	


?>
