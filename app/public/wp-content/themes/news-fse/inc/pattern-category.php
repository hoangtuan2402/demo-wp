<?php
/**
 * News FSE: Block Patterns
 *
 * @since News FSE 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since News FSE 1.0
 *
 * @return void
 */
function news_fse_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'news-fse' => array( 'label' => __( 'News FSE', 'news-fse' ) )
	);

	$block_pattern_categories = apply_filters( 'news_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'news_fse_register_pattern_category');
