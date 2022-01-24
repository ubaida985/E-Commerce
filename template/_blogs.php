
<?php
    shuffle($blogShuffle);
?>
        <!-- Blog Section -->
        <section id="blogs">
            <div class="container py-4">
                <h4 class="fontSize20 fontRubik">Latest Blogs</h4>
                <hr>

                <!-- Owl Carousel -->
                <div class="owl-carousel owl-theme">
                <?php 
                    foreach( $blogShuffle as $item ) { ?>
                    <div class="item">
                        <div class="card border-0 fontRaleway mr-5" style="width: 18rem;">
                            <h5 class="card-title fontSize16"><?php echo $item['blog_title'] ?? "lorem ipsum title"; ?></h5>
                            <img src="<?php echo $item['blog_image'] ?? "./assets/blog/blog1.jpg"; ?>" alt="blog1" class="card-img-top">
                            <p class="card-text fontSize14 text-black py1"><?php echo $item['blog_desc'] ?? "lorem ipsum"; ?></p>
                            <a href="<?php printf( "%s?blog_id=%s", "blog.php", $item['blog_id'] ); ?>" 
                            class="colorSecond text-left">Read More</a>
                        </div>
                    </div>
                <?php 
                    } 
                ?>
                </div>
                <!-- !Owl Carousel -->


            </div>
        </section>
        <!-- !Blog Section -->
