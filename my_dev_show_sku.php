<?php

/**
 * Plugin Name: Show SKU on Product Thumbnail
 * Plugin URI: https://egsyntax.com
 * Description: Show SKU on product thumbnail in product card
 * Author: Mohamed Youssef
 * Author URI: https://my-dev.pro
 * Version: 1.1.5
 * Requires at least: 5.8
 * Require PHP: 7.4
 * Licence: GPLv2 or later
 * Domain Path: /lang
 */

 if ( ! defined( 'ABSPATH' ) ) exit;

 function my_dev_show_sku() {
     
    global $product;

    if ( wc_product_sku_enabled()  && ( $product->get_sku()  || $product->is_type( 'variable' ) ) ) {

        ?>
        
            <div class='ref-number'>Ref.
                <?php echo $product->get_sku(); ?>
            </div>

        <?php
        
    }

 }

 add_action( 'woocommerce_after_shop_loop_item_title', 'my_dev_show_sku', 99 );