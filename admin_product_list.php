<!DOCTYPE html>
<html lang="en">
<?php require_once "backend/config.php"; ?>

<HEAD>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Cannon Studio</title>
    <link rel="icon" href="resources/img/cannon_logo.png" />
</HEAD>

<BODY>
<?php include 'header.php';?>

<div class = "container product">
        <?php
        $query = "SELECT * FROM product_list";
        $product_array = $shoppingCart->getAllProduct($query);

        if (!empty($product_array)) {
            foreach ($product_array as $key => $value) {
        ?>
                <div class="col-3 product-item">
                        <div class="product-image">
                            <img class="product-img" src="<?php echo $product_array[$key]["image"]; ?>">
                        </div>
                        <div>
                        <div class="product-name"><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
                        </div>
                        <div class="product-price"><?php echo "RM" . $product_array[$key]["price"]; ?></div>
                        <td><a href="edit_product.php?id=<?php echo $product_array[$key]["id"];?>">Edit</a> | <a href="backend/delete_product.php?id=<?php echo $product_array[$key]["id"];?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>  
                </div>
        <?php
            }
        }
        ?>
</div>
        <?php include 'footer.php';?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</BODY>

</HTML>