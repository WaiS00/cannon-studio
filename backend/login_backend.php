<?php
  require_once 'SQL_login.php';

  try
  {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (\PDOException $e)
  {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }

if(isset($_POST['username']) && isset($_POST['pwd'])){
	
    $un_temp = sanitise($pdo,$_POST['username']);
    $pw_temp = sanitise($pdo,$_POST['pwd']);
    $query   = "SELECT * FROM userdb WHERE login=$un_temp";
    $result  = $pdo->query($query);
    $tbl_name = 'userdb';

    if (!$result->rowCount()){
      echo "<script type='text/javascript'>alert('Please enter your username and password');</script>";
    }

    $row = $result->fetch();
    $fn  = $row['name'];
    $un  = $row['login'];
    $pw  = $row['pass'];
    $ty  = $row['type'];

    if (password_verify( $pw_temp, $pw))
    {
      session_start();

      $_SESSION['name'] = $fn;
      $_SESSION['type'] = $ty;

      if($_SESSION['type'] == 'customer'){
        echo "<script type='text/javascript'>alert('Login Successfully');</script>";
        echo "<script type='text/javascript'>window.location.href = './homepage.php';</script>";
      }else if($_SESSION['type'] == 'admin'){
        echo "<script type='text/javascript'>window.location.href = './admin_home.php';</script>";
      }


    }
    else echo "<script type='text/javascript'>alert('Incorrect username/ password');</script>";
  }


  function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }
?>
