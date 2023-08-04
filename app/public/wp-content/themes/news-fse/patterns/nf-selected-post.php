<?php
/**
 * Title: Selected Post
 * Slug: news-fse/nf-selected-post
 * Categories: news-fse
 *
 * @package news-fse
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"45px"}}},"className":"wp-block-section wow bounceInUp","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull wp-block-section wow bounceInUp" style="margin-top:45px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"50px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:50px"><!-- wp:heading {"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading" style="font-size:28px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Selected Post', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Discover All', 'news-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":22,"query":{"perPage":"1","pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"583px"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":""} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"28px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"post-author-icon-dark","fontSize":"extra-small"} -->
<h2 class="wp-block-heading post-author-icon-dark has-extra-small-font-size"><?php echo esc_html__( 'By', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:post-author {"showAvatar":false,"fontSize":"extra-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":21,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"selected-posts"} -->
<!-- wp:post-featured-image {"isLink":true,"height":"385px","dimRatio":40} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"left":"30px"}}},"className":"post-info","layout":{"type":"constrained"}} -->
<div class="wp-block-group post-info" style="padding-left:30px"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"28px"}}} /-->

<!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->