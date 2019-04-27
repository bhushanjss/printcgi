<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */

add_action('storefront_homepage_before_product_categories', 'custom_storefront_homepage_before_product_categories');
 
function custom_storefront_homepage_before_product_categories(){ ?>
 <div class="before-product-header">
  </div>
<?php }