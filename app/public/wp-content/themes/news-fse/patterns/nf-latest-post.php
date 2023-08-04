<?php
/**
 * Title: Latest Post
 * Slug: news-fse/nf-latest-post
 * Categories: news-fse
 *
 * @package news-fse
 * @since 1.0.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"45px"}}},"className":"wp-block-section latest-post wow bounceInUp","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull wp-block-section latest-post wow bounceInUp" style="margin-top:45px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"50px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:50px"><!-- wp:heading {"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading" style="font-size:28px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Latest Posts', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Discover All', 'news-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"80px","left":"80px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"77.77%"} -->
<div class="wp-block-column" style="flex-basis:77.77%"><!-- wp:query {"queryId":31,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"385px"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"26px"}}} /-->

<!-- wp:post-excerpt /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"post-author-icon-dark","fontSize":"extra-small"} -->
<h2 class="wp-block-heading post-author-icon-dark has-extra-small-font-size"><?php echo esc_html__( 'By', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:post-author {"showAvatar":false,"fontSize":"extra-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22.22%","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
<div class="wp-block-column" style="flex-basis:22.22%"><!-- wp:template-part {"slug":"sidebar","theme":"news-fse"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->