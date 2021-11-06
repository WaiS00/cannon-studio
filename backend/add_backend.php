<?php 

require_once 'SQL_login.php';

if(isset($_POST['name']) && isset($_POST['price'])){

  $name = sanitise($pdo,$_POST['name']);
  $tbl_name = 'services';
  $image    = sanitise($pdo,$_POST['image']);  
  $price    = sanitise($pdo,$_POST['price']);  
  
  if ($_POST['name'] == "" || $_POST['image'] == "" || $_POST['price'] == "") {
    echo "<script type='text/javascript'>alert('Field not filled');</script>";
  }else{
    $query = "INSERT INTO $tbl_name (id, name, image, price) 
    VALUES(NULL,$name, $image , $price)";
  
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
