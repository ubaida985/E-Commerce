<?php 
    $brands = array_map( function( $product ){
        return $product['item_brand'];
    }, $productShuffle );
    $uniqueBrands = array_unique( $brands );
    sort($uniqueBrands);
    shuffle($productShuffle);
    
    //request method post
    if( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['specialPriceSubmit']) ){
        $cartObj->addToCart( $_POST['user_id'], $_POST['item_id'] );
    }
?>
        <!-- Special Price -->
        <section id="specialPrice">
            <div class="container">
                <h4 class="fontRubik fontSize16">Special Price</h4>
                <div id="filters" class="button-group text-right fontBaloo fontSize16">
                    <button class=" btn is-checked" data-filter="*">All Brands</button>
                    <?php array_map( function($brand){
                        printf( '<button class="btn" data-filter=".%s">%s</button>', $brand, $brand );
                    }, $uniqueBrands  ); ?>
                    
                </div>


                <div class="grid">
                    <?php array_map(function($item) use($inCart){ ?>
                    <div class="gridItem <?php echo $item['item_brand'] ?? "Brand"; ?> border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product fontRaleway">
                                <a href="<?php printf( "%s?item_id=%s", "product.php", $item['item_id'] ); ?>">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/13.png"; ?>" alt="product1" class="img-fluid">
                            </a>
                                <div class="text-center">
                                    <h6> <?php echo $item['item_name'] ?? "Unknown"; ?> </h6>
                                    <div class="rating text-warning fontSize12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span><?php echo $item['item_price'] ?? "Unavailable"; ?></span>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                        <input type="hidden" name="user_id" value="<?php echo $item['user_id'] ?? '1'; ?>">
                                        <?php
                                        if (in_array($item['item_id'], $inCart)){
                                            echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                        }else{
                                            echo '<button type="submit" name="specialPriceSubmit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                        }
                                    ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }, $productShuffle ); ?>
                </div>
            </div>
        </section>
        <!-- !Special Price -->

