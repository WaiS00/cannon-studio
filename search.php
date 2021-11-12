<?php
session_start();

    $connect = mysqli_connect('localhost', 'root', '', 'cannon_studio');
    require_once "backend/config.php";

$search = $_POST['search'];

if(!empty($search)){

    $query = "SELECT * FROM product_list WHERE name LIKE '$search%'";
    $search_query = mysqli_query($connect, $query);

    while( $row = mysqli_fetch_array($search_query) ){
            ?>
                    <div class="col-3 product-item">
                        <form method="post" class="form">
                            <div class="product-image">
                                <img class="product-img" src="<?php echo $row ["image"]; ?>">
                            </div>
                            <div>
                            <div class="product-name"><strong><?php echo $row ["name"]; ?></strong></div>
                            </div>
                            <div class="product-price"><?php echo "RM" . $row ["price"]; ?></div>
                            <div>
                                <input class= "quantity" type="text" name="quantity" value="1" size="2" />
                            </div>
                            <div>
                            <?php         
                                if(isset($_SESSION['name'])){
                            ?>
                                <input type="submit" value="Add to cart" class="btnAddAction" />
                                <input type="hidden" value="add" name="action" />
                                <input type="hidden" value="<?php echo $row ["code"]; ?>" name="code" />
                            <?php
                            }else{
                                ?>
                                <?php echo 'Login to Add to Cart' ?>
                            <?php
                            }?>
                            </div>
                        </form>
                    </div>
            <?php
                }
                
            }
        


?>


