<?php 
    $item_id = $_GET['blog_id'] ?? 1;
    foreach ( $product->getData('blog') as $item ) {
        if( $item['blog_id'] == $item_id ) {
?>
<section id="blog">
        <br><br><br>
        <div class="container w-50">
            <h1><?php echo $item['blog_title'] ?? "Blog Title"; ?></h1>
            <hr>
            <img src="<?php echo $item['blog_image'] ?? "./assets/blogs/blog1.png"; ?>" alt="blog1" class="img-fluid">
            <hr>
            <br>
            <p><?php echo $item['blog_desc'] ?? "This is the blog Description"; ?>
            </p>
        </div>
        <br><br><br>
    </section>
    <?php
}}
?>