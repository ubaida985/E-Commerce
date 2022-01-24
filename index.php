<?php
    ob_start();
    //header
    include ('./template/_header.php');

    //main Section
    include ('./template/_bannerArea.php');
    include ('./template/_topSale.php');
    include ('./template/_specialPrice.php');
    include ('./template/_bannerAds.php');
    include ('./template/_newProducts.php');
    include ('./template/_blogs.php');

    //footer
    include ('./template/_footer.php');
?>