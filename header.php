<?php session_start();?>
<link rel="stylesheet" href="/css/homepage.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">
      <img src="resources/img/cannon_logo.png" alt="logo" width="250" height="auto" class="d-inline-block align-text-top">
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navmenu"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navmenu">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Products
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="product-body.php">DSLR Body</a></li>
          <li><a class="dropdown-item" href="product-lens.php">Lenses</a></li>
          <li><a class="dropdown-item" href="product-set.php">Set(DSLR and Lens)</a></li>
          <li><a class="dropdown-item" href="product-accessories.php">Accessories</a></li>
          <li><a class="dropdown-item" href="product-list.php">View All Products</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service_provided.php">Services Provided</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact_us.php">Contact Us</a>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a href="cart_main.php" class="nav-link"><i class="bi bi-cart"></i> Cart</a>
      </li>
      <li class="nav-item">
        <?php 
        if(isset($_SESSION['name'])){
        ?>
                <li class="nav-item">
                    <a href="session_logout.php" class="nav-link"><i class="bi bi-box-arrow-right logout"></i> Logout</a>
                </li>
        <?php 
            } else {
        ?>
                <li class="hvr-float-shadow">
                    <a href="register.php" class="nav-link"><span class="link-text">Sign Up</span></a>
                </li>
                <li class="hvr-float-shadow">
                    <a href="login.php" class="nav-link"><span class="link-text">Log In</span></a>
                </li>
        <?php 
            }
        ?>
      </li>
    </ul>
  </div>


  </nav>
  