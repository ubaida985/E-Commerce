     <?php shuffle($productShuffle);
     
    //request method post
    if( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['newProductsSubmit']) ){
        $cartObj->addToCart( $_POST['user_id'], $_POST['item_id'] );
    }
?> 
      <!-- New Products -->
        <section id="newProducts">
            <div class="container">
                <h4 class="fontRubik fontSize20">New Products</h4>
                <hr>

                <!-- Owl Carousel -->
                <div class="owl-carousel owl-theme">
                <?php foreach( $productShuffle as $item ) { ?>
                    <div class="item py-2 bg-light">
                        <div class="product fontRaleway">
                            <a href="<?php printf( "%s?item_id=%s", "product.php", $item['item_id'] ); ?>">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product 1" class="img-fluid">
                            </a>
                            <div class="text-center">
                                <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                                <div class="rating text-warning fontSize12">
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="fas fa-star"></i> </span>
                                    <span> <i class="far fa-star"></i> </span>
                                </div>
                                <div class="price py-2">
                                    <span><?php echo $item['item_price'] ?></span>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $item['user_id'] ?? '1'; ?>">
                                    <?php
                                        if (in_array($item['item_id'], $inCart )){
                                            echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                        }else{
                                            echo '<button type="submit" name="newProductsSubmit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                        }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- !Owl Carousel -->

            </div>
        </section>
        <!-- !New Products -->

