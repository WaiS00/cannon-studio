<HTML>
<?php require_once "backend/config.php";?>
<HEAD>
<TITLE>How to Build a Persistent Shopping Cart in PHP</TITLE>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</HEAD>
<BODY>
<?php include 'header.php';?>

<div class="container whole">
            <h1>Shopping Cart</h1>
            <a id="btnEmpty" href="cart_main.php?action=empty"><img src="resources/img/empty-cart.png" alt="empty-cart" title="Empty Cart" /></a>

<?php
$cartItem = $shoppingCart->getMemberCartItem($member_id);
if (! empty($cartItem)) {
    $item_total = 0;
    ?>	
<div class="container">
<table class="table" cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th scope="col" style="text-align: left;"><strong>Name</strong></th>
                    <th scope="col" style="text-align: right;"><strong>Quantity</strong></th>
                    <th scope="col" style="text-align: right;"><strong>Price</strong></th>
                    <th scope="col" style="text-align: right;"><strong>Action</strong></th>
                </tr>	
<?php
    foreach ($cartItem as $item) {
        ?>
				<tr>
                    <td
                        style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
                    <td
                        style="text-align: right; border-bottom: #F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
                    <td
                        style="text-align: right; border-bottom: #F0F0F0 1px solid;"><?php echo "RM".$item["price"]; ?></td>
                    <td
                        style="text-align: right; border-bottom: #F0F0F0 1px solid;"><a
                        href="cart_main.php?action=remove&id=<?php echo $item["cart_id"]; ?>"
                        class="btnRemoveAction"><img src="resources/img/icon-delete.png" alt="icon-delete" title="Remove Item" /></a></td>
                </tr>
				<?php
        $item_total += ($item["price"] * $item["quantity"]);
    }
    ?>

<tr>
                    <td colspan="3" style="text-align: right;"><strong>Total:</strong></td>
                    <td style="text-align: right;"><?php echo "RM".$item_total; ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>	
</div>	
  <?php
}
?>
</div>
<?php include 'footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</BODY>
</HTML>