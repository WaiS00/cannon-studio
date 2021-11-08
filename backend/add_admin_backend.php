<?php 

  require_once 'SQL_login.php';

  if(isset($_POST['username']) && isset($_POST['pwd'])){
	$fullName   = sanitise($pdo,$_POST['full_name']);
	$myusername = sanitise($pdo,$_POST['username']);
	$mypassword = sanitise($pdo,$_POST['pwd']);
	$mypassword = password_hash($mypassword, PASSWORD_DEFAULT);
  	$tbl_name = 'userdb';

	$validation = data_validation($_POST['username'], "/^[a-z\d_]{5,20}$/" , "username");
  	$validation .= data_validation($_POST['pwd'], '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', "password- at least one letter, at least one number, and there have to be 6-12 characters");
	$validation .= data_validation($_POST['full_name'], "/.+/", "full Name");

	if($validation==""){
		$query = "INSERT INTO $tbl_name (userid,name, login, pass, type) 
        VALUES(NULL, $fullName, $myusername, '$mypassword', 'admin')";
    
        $result = $pdo->query($query);

	if (! $result){
		 die('Error: ');
	}
  echo "<script type='text/javascript'>alert('Added Successfully');</script>";
  echo "<script type='text/javascript'>window.location.href = './add_admin.php';</script>";
}
	else{
	echo $validation;}
}

   function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }	
  
  function data_validation($data, $data_pattern, $data_type)
  {
	  if(preg_match($data_pattern, $data)) {
		  return "";
	  }
	  else {
      echo "<script type='text/javascript'>alert('invalid data for $data_type');</script>";
		  return "location:./add_admin.php";
	  }
  }
?>
