<header data-blend-widget="header" class="blend-header">
        <span class="blend-header-left">
            <!-- <a class="blend-header-item blend-button blend-button-link" >左部</a> -->
        </span>
        <span class="blend-header-title">
            <span class="blend-header-item">选择商品</span>
        </span>
        <span class="blend-header-right">
            <a href="javascript:window.location=<?php echo "'".WC()->cart->get_cart_url()."'" ?>" class="blend-header-item  blend-button blend-button-red">结算</a>
        </span>
</header>

<div id="sidenav" class="blend-sidenav">
    <nav class="blend-sidenav-nav">
        <ul>


<?php

$args_cates = array(
    'taxonomy'		=> 'product_cat'
);

$product_categories = get_categories($args_cates);

if ( $product_categories ) {

    foreach ( $product_categories as $category ) {

        echo '<li>' . $category->name . '</li>';
    }
        ?>
        </ul>
    </nav>



    <section class="blend-sidenav-content">
        <?php

    foreach ( $product_categories as $category ) {
        ?>

        <div class="blend-sidenav-item">
            <section class="blend-listview blend-listview-theme1 blend-checkbox-red" data-blend-widget="checkbox" data-blend-checkbox='{"type":"group"}'>
                <div class="blend-listview-header blend-flexbox">
                    <span class="blend-checkbox blend-checkbox-default blend-flexbox-item blend-checkbox-all blend-flexbox-item"></span>
                        <span class="blend-listview-header-title blend-flexbox-item blend-flexbox-ratio">
                            选择商品列表
                        </span>
                    <span class="blend-flexbox-item"></span>
                </div>
                <div class="blend-listview-main">

        <?php
        $products = new WP_Query('product_cat='.$category->name);
        $woocommerce_loop['columns'] = $columns;

        if ( $products->have_posts() ) : ?>

                    <?php


                while ( $products->have_posts() ) : $products->the_post();

                    wc_get_template_part( 'content', 'product' );

                endwhile; // end of the loop.



        endif;?>
                 </div>
                </section>
            </div>
                    <?php

    }?>

    </section>

    <?php

}//if_product


?>

</div>

<script type="text/javascript">

    $("#sidenav").sidenav({});

    function addToCart(url){
        jQuery(document).ready(function($){
            $.get(url, function(response) {
                console.log('add to cart success !');
            });
        });
    }
</script>
