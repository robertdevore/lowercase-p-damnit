<?php
/*
 * @link              https://robertdevore.com
 * @since             1.0.0
 * @package           Lowercase_p_Damnit
 *
 * @wordpress-plugin
 * Plugin Name:       Lowercase p Damnit
 * Plugin URI:        https://notmatt.press
 * Description:       Replaces any instance of the string "WordPress" with "Wordpress" in post content and widget content.
 * Version:           1.0.0
 * Author:            Robert DeVore
 * Author URI:        https://robertdevore.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lowercase-p-damnit
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 */
define( 'LOWERCASE_p_DAMNIT_VERSION', '1.0.0' );

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Filters content to replace instances of "WordPress" with "Wordpress".
 *
 * @param string $content The original content.
 * @return string The modified content with "WordPress" replaced by "Wordpress".
 */
function lowercase_p_damnit_filter_content($content) {
    return str_replace( 'WordPress', 'Wordpress', $content );
}

/**
 * Initialize the plugin by adding content filters.
 */
function lowercase_p_damnit_init() {
    // Filter for post content in Classic Editor and Gutenberg front end.
    add_filter( 'the_content', 'lowercase_p_damnit_filter_content' );

    // Filter for widget content.
    add_filter( 'widget_text', 'lowercase_p_damnit_filter_content' );

    // Filter for Gutenberg block content.
    add_filter( 'render_block', 'lowercase_p_damnit_filter_content' );

    // Filter for the post/page title.
    add_filter( 'the_title', 'lowercase_p_damnit_filter_content' );
}
add_action( 'init', 'lowercase_p_damnit_init' );
