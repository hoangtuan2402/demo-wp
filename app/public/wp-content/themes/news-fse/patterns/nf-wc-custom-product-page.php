<?php
/**
 * Title: WooCommerce Custom Product Page
 * Slug: news-fse/nf-wc-custom-product-page
 * Categories: news-fse
 *
 * @package news-fse
 * @since 1.0.0
 */

?>

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{}},"className":"wp-block-section","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull wp-block-section"><!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><?php echo esc_html__( 'Newest Products', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-new {"columns":4,"rows":2,"alignButtons":true,"align":"full"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"48px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:48px"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Featured Products', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/featured-product /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"48px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:48px"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Best Selling Products', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-best-sellers {"columns":4,"rows":2,"alignButtons":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"48px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:48px"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Featured Category', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-category /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-category /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-category /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/featured-category /--></div>`
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"48px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:48px"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Authors Choice', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/handpicked-products {"columns":4,"products":[],"alignButtons":true} /--></div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->
