<?php
/**
 * Created by PhpStorm.
 * User: lujiejie
 * Date: 15-7-24
 * Time: 下午2:06
 */




$args_cates = array(
    'taxonomy'		=> 'product_cat'
);

$product_categories = get_categories($args_cates);

if ( $product_categories ) {

    foreach ( $product_categories as $category ) {

        wc_get_template( 'content-product_cat.php', array(
            'category' => $category
        ) );

        $products = new WP_Query('product_cat='.$category->name);
        $woocommerce_loop['columns'] = $columns;

        if ( $products->have_posts() ) :

                woocommerce_product_loop_start();

                while ( $products->have_posts() ) : $products->the_post();

                    wc_get_template_part( 'content', 'product' );

                endwhile; // end of the loop.

                woocommerce_product_loop_end();

        endif;

        //wp_reset_postdata();

    }

}


?>

