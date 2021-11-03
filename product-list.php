<HTML>
<?php require_once "backend/config.php"; ?>

<HEAD>
    <TITLE>How to Build a Persistent Shopping Cart in PHP</TITLE>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</HEAD>

<BODY>

    <div id="product-grid">
        <link href="css/style.css" type="text/css" rel="stylesheet" />

        <div class="txt-heading">
            <div class="txt-heading-label">Products</div>
        </div>
        <?php
        $query = "SELECT * FROM tbl_product";
        $product_array = $shoppingCart->getAllProduct($query);
        if (!empty($product_array)) {
            foreach ($product_array as $key => $value) {
        ?>
                <div class="product-item">
                    <form method="post" class="form">
                        <div class="product-image">
                            <img src="<?php echo $product_array[$key]["image"]; ?>">
                        </div>
                        <div>
                            <strong><?php echo $product_array[$key]["name"]; ?></strong>
                        </div>
                        <div class="product-price"><?php echo "$" . $product_array[$key]["price"]; ?></div>
                        <div>
                            <input type="text" name="quantity" value="1" size="2" />
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
</BODY>

</HTML>