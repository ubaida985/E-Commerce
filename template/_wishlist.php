<?php 
    ob_start();
    
    //adding from wishlist to cart
    if( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['addToCart']) ){
        $cartObj->addToCart( $_POST['user_id'], $_POST['item_id'] );
        $cartObj->deleteCart( $_POST['item_id'], 'wishlist' );
    }


    //deleting from wishlist
    if( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['deleteFromWishlist']) ){
        $cartObj->deleteCart( $_POST['item_id'], 'wishlist' );
    }
?>
<section id="wishlist" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="fontBaloo fontSize20">Your Wishlist</h5>

                <!-- Cart Items -->
                <div class="row">

                    <div class="col-sm-9">
                    <?php 
                                foreach( $product->getData('wishlist') as $item ) {
                                    $cart = $product->getProduct($item['item_id']);
                                    $subTotal[] = array_map( function( $item ) {
                            ?>
                        <div class="row border-top my-3 pt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? './assets/products/1.png' ?>" alt="product1" class="img-fluid"
                                    style="height: 120px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="fontBaloo fontSize20"><?php echo $item['item_name'] ?? "Unknown" ?></h5>
                                <small>by <?php echo $item['item_brand'] ?? "Brand" ?></small>
                                <!-- rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning fontSize12">
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="fas fa-star"></i> </span>
                                        <span> <i class="far fa-star"></i> </span>
                                    </div>
                                    <a href="" class="px-2 fontRaleway fontSize14">12,031 ratings
                                    </a>
                                </div>
                                <!-- Quantity -->
                                <div class="qty d-flex pt-2">
                                    <!-- <div class="d-flex fontRaleway w-25">
                                        <button class="border bg-light qtyUp" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i
                                                class="fas fa-angle-up"></i></button>
                                        <input data-id="<?php echo $item['item_id'] ?? '0'; ?>" type="text"
                                            class="w-100 bg-light qtyInput border px-2" disabled value="1"
                                            placeholder="1">
                                        <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="border bg-light qtyDown"><i
                                                class="fas fa-angle-down"></i></button>
                                    </div> -->
                                    <form method="post">
                                        <input type="hidden" name="item_id"  value="<?php echo $item['item_id'] ?? '0'; ?>" >
                                        <Button type="submit" name="deleteFromWishlist" class="btn fontBaloo text-danger px-3 border-right">Delete</Button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" name="item_id"  value="<?php echo $item['item_id'] ?? '0'; ?>" >
                                        <input type="hidden" name="user_id" value="<?php echo $item['user_id'] ?? '1'; ?>">
                                        <Button type="submit" name="addToCart" class="btn fontBaloo text-warning">Add to Cart</Button>
                                    </form>
                                </div>

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="fontSize20 text-danger fontBaloo">
                                    <span id="productPrice" class="productPrice"><?php echo $item['item_price'] ?? "0"; ?></span>
                                </div>
                            </div>
                           
                        </div>

                        <?php 
                              return $item['item_price'];
                            }, $cart );
                          }
                        ?>
                        

                    </div>
                    <!-- !Cart Items -->

                </div>
</section>