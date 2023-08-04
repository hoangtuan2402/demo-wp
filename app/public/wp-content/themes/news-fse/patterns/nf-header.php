<?php
/**
 * Title: Header
 * Slug: news-fse/nf-header
 * Categories: news-fse
 *
 * @package news-fse
 * @since 1.0.0
 */

?>

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"22px","bottom":"8px"}},"color":{"background":"#183153"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull has-background" style="background-color:#183153;padding-top:22px;padding-bottom:8px"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"wp-block-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull wp-block-section" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"className":"header-items"} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile header-items"><!-- wp:column {"verticalAlignment":"center","width":"","className":"nf-header-left-content"} -->
<div class="wp-block-column is-vertically-aligned-center nf-header-left-content"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"header-title"} /-->
<!-- wp:navigation {"icon":"menu","layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Features","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Fashion","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Lifestyle","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.3%","className":"nf-header-right-content"} -->
<div class="wp-block-column is-vertically-aligned-center nf-header-right-content" style="flex-basis:33.3%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group">
<!-- wp:html -->
<?php echo news_fse_get_svg( array( 'icon' => 'search' ) ); ?>
<!-- /wp:html -->

<!-- wp:buttons {"className":"header-button"} -->
<div class="wp-block-buttons header-button"><!-- wp:button {"textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color wp-element-button"><?php echo esc_html__( 'Subscribe', 'news-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}},"className":"nf-search"} /-->

<!-- wp:group {"className":"overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group overlay"></div>
<!-- /wp:group -->