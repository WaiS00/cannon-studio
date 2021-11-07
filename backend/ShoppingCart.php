<?php
require_once "DBController.php";

class ShoppingCart extends DBController
{

    function getAllProduct()
    {
        $query = "SELECT * FROM product_list";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getSet()
    {
        $query = "SELECT * FROM product_list WHERE category = 'set'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getBody()
    {
        $query = "SELECT * FROM product_list WHERE category = 'body'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }    
    
    function getLens()
    {
        $query = "SELECT * FROM product_list WHERE category = 'lens'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getAccessories()
    {
        $query = "SELECT * FROM product_list WHERE category = 'accessories'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getMemberCartItem($member_id)
    {
        $query = "SELECT product_list.*, shopping_cart.id as cart_id,shopping_cart.quantity FROM product_list, shopping_cart WHERE 
            product_list.id = shopping_cart.product_id AND shopping_cart.member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function getProductByCode($product_code)
    {
        $query = "SELECT * FROM product_list WHERE code=?";
        
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $product_code
            )
        );
        
        $productResult = $this->getDBResult($query, $params);
        return $productResult;
    }

    function getCartItemByProduct($product_id, $member_id)
    {
        $query = "SELECT * FROM shopping_cart WHERE product_id = ? AND member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function addToCart($product_id, $quantity, $member_id)
    {
        $query = "INSERT INTO shopping_cart (product_id,quantity,member_id) VALUES (?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function updateCartQuantity($quantity, $cart_id)
    {
        $query = "UPDATE shopping_cart SET  quantity = ? WHERE id= ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function deleteCartItem($cart_id)
    {
        $query = "DELETE FROM shopping_cart WHERE id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function delete($id)
    {
        $query = "DELETE FROM product_list WHERE id = $id";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function emptyCart($member_id)
    {
        $query = "DELETE FROM shopping_cart WHERE member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->updateDB($query, $params);
    }

}
