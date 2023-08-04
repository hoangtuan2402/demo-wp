<?php
/**
 * Title: Trending Post
 * Slug: news-fse/nf-trending-news
 * Categories: news-fse
 *
 * @package news-fse
 * @since 1.0.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"45px"}}},"className":"wp-block-section trending-news-container wow bounceInUp","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull wp-block-section trending-news-container wow bounceInUp" style="margin-top:45px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"50px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:50px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"28px"}}} -->
<h2 class="wp-block-heading" style="font-size:28px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Trending News', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Discover All', 'news-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":69,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"372px","align":"wide"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"className":"trending-news","layout":{"type":"default"}} -->
<div class="wp-block-group trending-news" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"cat-date-container","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group cat-date-container"><!-- wp:post-terms {"term":"category","separator":""} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"21px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"post-author-icon","fontSize":"extra-small"} -->
<h2 class="wp-block-heading post-author-icon has-white-color has-text-color has-link-color has-extra-small-font-size"><?php echo esc_html__( 'By', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:post-author {"showAvatar":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"extra-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->