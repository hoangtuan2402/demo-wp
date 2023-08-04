<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package news-fse
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'NEWS_FSE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support.
 */
function news_fse_setup() {

    load_theme_textdomain( 'news-fse', get_template_directory() . '/languages' );

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
    add_theme_support('editor-styles');

}
add_action( 'after_setup_theme', 'news_fse_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function news_fse_styles() {

    $min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

    wp_enqueue_style(
        'news-fse-style',
        get_stylesheet_uri(),
        [],
        NEWS_FSE_VERSION
    );

    // FontAwesome.
    wp_enqueue_style(
        'news-fse-font-awesome',
        get_theme_file_uri( 'assets/css/font-awesome/css/all' . $min . '.css' ),
        [],
        '5.15.3'
    );

    wp_enqueue_style(
        'news-fse-animate',
        get_theme_file_uri( 'assets/css/animate' . $min . '.css' ),
        [],
        NEWS_FSE_VERSION
    );

    wp_enqueue_script(
        'news-fse-custom-script',
        get_theme_file_uri( 'assets/js/custom.js' ),
        array('jquery'),
        NEWS_FSE_VERSION
    );

    $sidebar_position = get_option('news_fse_sidebar_position', 'right');
    // Localize the script with some data
    $data = array(
        'sidebar_position' => $sidebar_position
    );
    wp_localize_script(
        'news-fse-custom-script',
        'newsFse',
        $data
    );

     wp_enqueue_script(
        'news-fse-wow',
        get_theme_file_uri( 'assets/js/wow' . $min . '.js' ),
        array('jquery'),
        NEWS_FSE_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'news_fse_styles' );


function enqueue_custom_editor_styles() {
    wp_enqueue_style( 'news-fse-admin-style', get_template_directory_uri() . '/assets/editor-style.css', array(), NEWS_FSE_VERSION, 'all' );
}
add_action( 'enqueue_block_editor_assets', 'enqueue_custom_editor_styles' );

function news_fse_admin_styles() {
    wp_enqueue_style(
        'news-fse-theme-info',
        get_theme_file_uri( 'assets/css/theme-info.css' ),
        [],
        NEWS_FSE_VERSION
    );
}
add_action( 'admin_enqueue_scripts', 'news_fse_admin_styles' );

function news_fse_block_assets() {
    $min = '';
    // FontAwesome.
    wp_enqueue_style(
        'news-fse-font-awesome',
        get_theme_file_uri( 'assets/css/font-awesome/css/all' . $min . '.css' ),
        [],
        '5.15.3'
    );
}
add_action( 'wp_enqueue_scripts', 'news_fse_block_assets' );
add_action( 'enqueue_block_editor_assets', 'news_fse_block_assets' );


/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/pattern-category.php';

// helper
require get_template_directory() . '/inc/helpers.php';

// tgm-plugin
require get_template_directory() . '/inc/tgm-plugin/tgmpa-hook.php';

// Admin Info
require get_template_directory() . '/class/admin-info.php';

// Add options page to admin menu
add_action('admin_menu', 'news_fse_options_menu');
function news_fse_options_menu() {
  add_theme_page(__('Theme Options', 'news-fse'), __('Theme Options', 'news-fse'), 'manage_options', 'news_fse_options', 'news_fse_options_page');
}
// Define options page content
function news_fse_options_page() {
  if (!current_user_can('manage_options')) {
    wp_die(__('You do not have sufficient permissions to access this page.', 'news-fse' ));
  }

  // Check if form has been submitted
  if (isset($_POST['submit'])) {
    // Save selected option to database after sanitization
    $sanitized_sidebar_position = sanitize_text_field($_POST['sidebar_position']);
    update_option('news_fse_sidebar_position', $sanitized_sidebar_position);
  }

  // Get currently selected option from database
  $sidebar_position = get_option('news_fse_sidebar_position', 'right');

  // Display options form
  ?>
  <div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <form method="post">
      <table class="form-table">
        <tr valign="top">
          <th scope="row"><?php echo esc_html__( 'Sidebar Position', 'news-fse' ); ?></th>
          <td>
            <label><input type="radio" name="sidebar_position" value="left" <?php checked('left', $sidebar_position); ?>> <?php echo esc_html__( 'Left', 'news-fse' ); ?></label><br>
            <label><input type="radio" name="sidebar_position" value="right" <?php checked('right', $sidebar_position); ?>> <?php echo esc_html__( 'Right', 'news-fse' ); ?></label><br>
            <label><input type="radio" name="sidebar_position" value="none" <?php checked('none', $sidebar_position); ?>> <?php echo esc_html__( 'None', 'news-fse' ); ?></label>
          </td>
        </tr>
      </table>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}

/**
 * Set the default image if none exists.
 *
 * @param string $html              The post thumbnail HTML.
 * @param int    $post_id           The post ID.
 * @param int    $post_thumbnail_id The post thumbnail ID.
 * @return html
 */
function news_fse_fallback_post_thumbnail_html( $html, $post_id, $post_thumbnail_id ) {
    if ( empty( $html ) ) {
        $html = '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/default-image.jpg" loading="lazy" alt="' . get_the_title( $post_id ) . '" />';
    }

    return $html;
}

add_filter( 'post_thumbnail_html', 'news_fse_fallback_post_thumbnail_html', 5, 3 );

