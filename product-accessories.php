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
        $query = "SELECT * FROM tbl_product WHERE category = 'accessories'";
        $product_array = $shoppingCart->getAccessories($query);
        if (!empty($product_array)) {
            foreach ($product_array as $key => $value) {
        ?>
                <div class="col-3 product-item">
                    <form method="post" class="form">
                        <div class="product-image">
                            <img class="product-img" src="<?php echo $product_array[$key]["image"]; ?>">
                        </div>
                        <div>
                        <div class="product-name"><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
                        </div>
                        <div class="product-price"><?php echo "RM" . $product_array[$key]["price"]; ?></div>
                        <div>
                            <input class= "quantity" type="text" name="quantity" value="1" size="2" />
                        </div>
                        <div>
                            <input type="submit" value="Add to cart" class="btnAddAction" />
                            <input type="hidden" value="add" name="action" />
                            <input type="hidden" value="<?php echo $product_array[$key]["code"]; ?>" name="code" />
                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                // Bind to the submit event of our form
                $(".form").submit(function(event) {

                    // Prevent default posting of form
                    event.preventDefault();

                    // setup some local variables
                    var $form = $(this);

                    // Let's select and cache all the fields
                    var $inputs = $form.find("input, select, button, textarea");

                    // Serialize the data in the form
                    var serializedData = $form.serialize();

                    // Let's disable the inputs for the duration of the Ajax request.
                    // Note: we disable elements AFTER the form data has been serialized.
                    // Disabled form elements will not be serialized.
                    $inputs.prop("disabled", true);

                    // Fire off the request to /form.php
                    request = $.ajax({
                        url: "cart_main.php",
                        type: "POST",
                        data: serializedData
                    });

                    // Callback handler that will be called on success
                    request.done(function(response, textStatus, jqXHR) {
                        window.alert("Hooray, it worked!");
                    });

                    // Callback handler that will be called on failure
                    request.fail(function(jqXHR, textStatus, errorThrown) {
                        window.alert("Oh no!\n" + errorThrown);
                    });

                    // Callback handler that will be called regardless
                    // if the request failed or succeeded
                    request.always(function() {
                        // Reenable the inputs
                        $inputs.prop("disabled", false);
                    });

                });
            });
        </script>
    </div>
        <?php include 'footer.php';?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</BODY>

</HTML>