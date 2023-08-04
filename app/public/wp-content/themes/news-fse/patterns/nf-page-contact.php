<?php
/**
 * Title: Contact Page
 * Slug: news-fse/nf-page-contact
 * Categories: news-fse
 *
 * @package news-fse
 * @since 1.0.0
 */

?>

<!-- wp:group {"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background"><!-- wp:group {"style":{"spacing":{"padding":{"top":"49px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:49px;padding-bottom:50px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Get In Touch', 'news-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni', 'news-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:code {"className":"nf-phone"} -->
<pre class="wp-block-code nf-phone"><code>+1 (123) 456-7890</code></pre>
<!-- /wp:code -->

<!-- wp:code {"className":"nf-email"} -->
<pre class="wp-block-code nf-email"><code>eagle-vision@gmail.com</code></pre>
<!-- /wp:code -->

<!-- wp:code {"className":"nf-address"} -->
<pre class="wp-block-code nf-address"><code><?php echo esc_html__( 'Kupondol, kathmandu', 'news-fse' ); ?></code></pre>
<!-- /wp:code --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","textColor":"black","className":"nf-contact-form"} -->
<div class="wp-block-column nf-contact-form has-black-color has-text-color" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:shortcode -->
[contact-form-7 id="708" title="Contact"]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->