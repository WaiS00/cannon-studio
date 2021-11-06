<!DOCTYPE html>
<html lang="en">
<?php require_once "backend/config2.php"; ?>

<HEAD>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="css/service_provided.css" type="text/css" rel="stylesheet" />
    <title>Cannon Studio</title>
    <link rel="icon" href="resources/img/cannon_logo.png" />
</HEAD>

<BODY>
<?php include 'header.php';?>

        <div class = "container product">
        <?php
        $query = "SELECT * FROM services";
        $product_array = $servicesResult->getAllServices($query);
        if (!empty($product_array)) {
            foreach ($product_array as $key => $value) {
        ?>
                <div class="col-5 product-item">
                        <div class="product-image">
                            <img class="product-img" src="<?php echo $product_array[$key]["image"]; ?>">
                        </div>
                        <div>
                        <div class="product-name"><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
                        </div>
                        <div class="product-price"><?php echo "From RM" . $product_array[$key]["price"]; ?></div>
                        <a href="chatbot.php" class="btn view-btn" role="button" class="Chat Now!" style="background-color:aqua;"> Chat Now</a>
                </div>
        <?php
            }
        }
        ?>
        </div>
    </div>
        <?php include 'footer.php';?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</BODY>

</HTML>