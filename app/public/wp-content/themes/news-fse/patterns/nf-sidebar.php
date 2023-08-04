<?php
/**
 * Title: Sidebar
 * Slug: news-fse/nf-sidebar
 * Categories: news-fse
 *
 * @package news-fse
 * @since 1.0.0
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}}} -->
<h2 class="wp-block-heading" style="font-size:24px;font-style:normal;font-weight:700;line-height:1"><?php echo esc_html__( 'Categories', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"0","top":"var:preset|spacing|30"}}},"backgroundColor":"body-text","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-body-text-color has-alpha-channel-opacity has-body-text-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:categories /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}}} -->
<h2 class="wp-block-heading" style="font-size:24px;font-style:normal;font-weight:700;line-height:1"><?php echo esc_html__( 'Top Posts', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"backgroundColor":"body-text","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-body-text-color has-alpha-channel-opacity has-body-text-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:latest-posts {"postsToShow":3,"displayFeaturedImage":true,"featuredImageSizeSlug":"large","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","lineHeight":1.3}},"className":"latest-posts"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->