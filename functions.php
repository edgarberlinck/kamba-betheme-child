<?php
/**
 * Kamba Betheme Child Theme
 *
 * @package Kamba Betheme Child Theme
 * @author Edgar Muniz Berlinck
 * @link https://github.com/edgarberlinck/kamba-betheme-child
 * @version 1.0.1
 */

/**
 * Child Theme constants
 * You can change below constants
 */

/**
 * Load Textdomain
 * @deprecated please use BeCustom plugin instead
 */

// define('WHITE_LABEL', false);

/**
 * Load Textdomain
 */

load_child_theme_textdomain('betheme', get_stylesheet_directory() . '/languages');
load_child_theme_textdomain('mfn-opts', get_stylesheet_directory() . '/languages');

/**
 * Enqueue Styles
 */

function mfnch_enqueue_styles()
{
	// enqueue the parent stylesheet
	// however we do not need this if it is empty
	// wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');

	// enqueue the parent RTL stylesheet

	if ( is_rtl() ) {
		wp_enqueue_style('mfn-rtl', get_template_directory_uri() . '/rtl.css');
	}

	// enqueue the child stylesheet

	wp_dequeue_style('style');
	wp_enqueue_style('style', get_stylesheet_directory_uri() .'/style.css');
}
add_action('wp_enqueue_scripts', 'mfnch_enqueue_styles', 101);
add_filter('woocommerce_nif_field_required', '__return_true');