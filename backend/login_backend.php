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

    if (!$result->rowCount()){
      echo "<script type='text/javascript'>alert('Please enter your username and password');</script>";
    }

    $row = $result->fetch();
    $fn  = $row['name'];
    $un  = $row['login'];
    $pw  = $row['pass'];

    //if (password_verify(str_replace("'", "", $pw_temp), $pw))
    if (password_verify( $pw_temp, $pw))
    {
      session_start();

      $_SESSION['name'] = $fn;
     
      echo htmlspecialchars(" Hi $fn,
        you are now logged in as '$un'");
      die ("<p><a href='continue.php'>Click here to continue</a></p>
            <br><p><a href='session_logout.php'>Click here to logout</a></p>");
    }
    else echo "<script type='text/javascript'>alert('Incorrect username/ password');</script>";
  }


  function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }
?>
