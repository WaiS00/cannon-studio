<HTML>
<?php require_once "backend/config.php";?>
<HEAD>
<TITLE>How to Build a Persistent Shopping Cart in PHP</TITLE>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>

    <div id="shopping-cart">
        <div class="txt-heading">
            <div class="txt-heading-label">Shopping Cart</div> <a id="btnEmpty" href="cart_main.php?action=empty"><img src="resources/img/empty-cart.png" alt="empty-cart" title="Empty Cart" /></a>
        </div>
<?php
$cartItem = $shoppingCart->getMemberCartItem($member_id);
if (! empty($cartItem)) {
    $item_total = 0;
    ?>	
<table cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th style="text-align: left;"><strong>Name</strong></th>
                    <th style="text-align: left;"><strong>Code</strong></th>
                    <th style="text-align: right;"><strong>Quantity</strong></th>
                    <th style="text-align: right;"><strong>Price</strong></th>
                    <th style="text-align: center;"><strong>Action</strong></th>
                </tr>	
<?php
    foreach ($cartItem as $item) {
        ?>
				<tr>
                    <td
                        style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
                    <td
                        style="text-align: left; border-bottom: #F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
                    <td
                        style="text-align: right; border-bottom: #F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
                    <td
                        style="text-align: right; border-bottom: #F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
                    <td
                        style="text-align: center; border-bottom: #F0F0F0 1px solid;"><a
                        href="cart_main.php?action=remove&id=<?php echo $item["cart_id"]; ?>"
                        class="btnRemoveAction"><img src="resources/img/icon-delete.png" alt="icon-delete" title="Remove Item" /></a></td>
                </tr>
				<?php
        $item_total += ($item["price"] * $item["quantity"]);
    }
    ?>

<tr>
                    <td colspan="3" align=right><strong>Total:</strong></td>
                    <td align=right><?php echo "$".$item_total; ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>		
  <?php
}
?>
</div>

</BODY>
</HTML>