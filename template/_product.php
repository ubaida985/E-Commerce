<?php 

    $mrp = 200;
    $item_id = $_GET['item_id'] ?? 1;
    foreach ( $product->getData() as $item ) {
        if( $item['item_id'] == $item_id ) {

            if( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['productAddCart']) ){
                $cartObj->addToCart( $_POST['user_id'], $_POST['item_id'] );
            }
?>
<!-- Product -->
 <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid">
                        <div class="form-row fontBaloo fontSize16">
                            <div class="col">
                                <form method="post">
                                    
                                </form>
                                <button class="btn btn-danger form-control" type="submit">Proceed to buy</button>
                            </div>
                            <div class="col">
                            <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $item['user_id'] ?? '1'; ?>">
                                    <?php
                                        if (in_array($item['item_id'], $inCart)){
                                            echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                                        }else{
                                            echo '<button type="submit" name="productAddCart" class="btn btn-warning form-control">Add to Cart</button>';
                                        }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="fontBaloo fontSize20"> <?php echo $item['item_name'] ?? "-.-" ?> </h5>
                        <small>by <?php echo $item['item_brand'] ?? "brand" ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning fontSize12">
                                <span> <i class="fas fa-star"></i> </span>
                                <span> <i class="fas fa-star"></i> </span>
                                <span> <i class="fas fa-star"></i> </span>
                                <span> <i class="fas fa-star"></i> </span>
                                <span> <i class="far fa-star"></i> </span>
                            </div>
                            <a href="" class="px-2 fontRaleway fontSize14">12,031 ratings | 1000+ answered queries
                            </a>
                        </div>
                        <hr class="m-0">

                        <!-- Product Pricing -->
                        <table class="my-3">
                            <tr class="fontRaleway fontSize14">
                                <td>M.R.P</td>
                                <td><strike>$<?php echo $mrp ?></strike></td>

                            </tr>
                            <tr class="fontRaleway fontSize14">
                                <td>Discounted Price</td>
                                <td class="fontSize20 text-danger">$<span><?php echo $item['item_price'] ?? "0" ?></span>
                                    <small class="text-dark fontSize12"> inclusive of all taxes</small>
                                </td>
                            </tr>
                            </tr>
                            <tr class="fontRaleway fontSize14">
                                <td>You Save</td>
                                <td class="fontSize16 text-danger">$<span>30.00</span>
                                </td>
                            </tr>
                        </table>
                        <!-- !Product Pricing -->

                        <!-- Policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="text-center mr-5 return">
                                    <div class="fontSize20 my-2 colorSecondary">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="fontRaleway fontSize12">10 days<br>Replacement</a>
                                </div>
                                <div class="text-center mr-5 return">
                                    <div class="fontSize20 my-2 colorSecondary">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="fontRaleway fontSize12">Shoppie<br>Delivered</a>
                                </div>
                                <div class="text-center mr-5 return">
                                    <div class="fontSize20 my-2 colorSecondary">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="" class="fontRaleway fontSize12">1 year<br>Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- !Policy -->
                        <hr>

                        <!-- Order Details -->
                        <div id="orderDetails" class="fontRaleway d-flex-flex-column text-dark">
                            <small>Delivery by Jan 30 - Feb 06</small>
                            <br>
                            <small>Sold by <a href="">Lorem Store(4.5 out of 5 | 18,111 ratings)</a></small>
                            <br>
                            <small> <i class="fas fa-map-marker-alt colorPrimary"></i> Deliver to Customer -
                                226003</small>
                        </div>
                        <!-- !Order Details -->

                        <div class="row">
                            <div class="col-6">
                                <!-- Color -->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fontBaloo">Color</h6>
                                        <div class="p-2 colorYellowBg rounded-circle"> <button
                                                class="btn fontSize14"></button> </div>
                                        <div class="p-2 colorPrimaryBg rounded-circle"> <button
                                                class="btn fontSize14"></button> </div>
                                        <div class="p-2 colorSecondaryBg rounded-circle"> <button
                                                class="btn fontSize14"></button> </div>
                                    </div>
                                </div>
                                <!-- !Color -->
                            </div>

                            <!-- Product quantity section -->
                            <div class="col-6">
                                <div class="qty d-flex">
                                    <h6 class="fontBaloo">Qty</h6>
                                    <div class="px-4 d-flex fontRaleway">
                                        <button class="border bg-light qtyUp" data-id="product1"><i
                                                class="fas fa-angle-up"></i></button>
                                        <input type="text" class="w-50 bg-light qtyInput border px-2" data-id="product1"
                                            disabled value="1" placeholder="1">
                                        <button class="border bg-light qtyDown" data-id="product1"><i
                                                class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- !Product quantity section -->
                        </div>

                        <!-- Ram Size -->
                        <div class="size my-3">
                            <h6 class="fontBaloo">Size</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="fontRubik p-2 border">
                                    <button class="btn fontSize14 p-0">4GB RAM</button>
                                </div>
                                <div class="fontRubik p-2 border">
                                    <button class="btn fontSize14 p-0">6GB RAM</button>
                                </div>
                                <div class="fontRubik p-2 border">
                                    <button class="btn fontSize14 p-0">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                        <!-- !Ram Size -->
                    </div>
                    <div class="col-12">
                        <h6 class="fontRubik">Product Description</h6>
                        <hr>
                        <p class="fontRaleway fontSize14">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Labore perferendis tempora rem quidem ex autem quis excepturi beatae, dolor voluptatibus
                            quaerat hic asperiores in id cumque quae error incidunt saepe!</p>
                        <p class="fontRaleway fontSize14">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Labore perferendis tempora rem quidem ex autem quis excepturi beatae, dolor voluptatibus
                            quaerat hic asperiores in id cumque quae error incidunt saepe!</p>
                    </div>
                </div>
            </div>
</section>
<!-- !Product -->

<?php 
        }
}
?>