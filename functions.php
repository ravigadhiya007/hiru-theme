<?php
/**
 * Blok functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'blok_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Blok 1.0
	 *
	 * @return void
	 */
	function blok_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'blok_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'blok_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Blok 1.0
	 *
	 * @return void
	 */
	function blok_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'blok_editor_style' );

// Enqueues theme style and script on the front.
if ( ! function_exists( 'blok_enqueue_theme_scripts' ) ) :
	/**
	 * Enqueue theme styles and scripts.
	 *
	 * @since Blok 1.0
	 *
	 * @return void
	 */
	function blok_enqueue_theme_scripts() {
		// Enqueues style.css on the front.
		wp_enqueue_style(
			'blok-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueues script.js on the front.
		wp_enqueue_script(
			'blok-script',
			get_parent_theme_file_uri( 'assets/js/script.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'blok_enqueue_theme_scripts' );

// Registers custom block styles.
if ( ! function_exists( 'blok_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Blok 1.0
	 *
	 * @return void
	 */
	function blok_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'blok' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'blok_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'blok_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Blok 1.0
	 *
	 * @return void
	 */
	function blok_pattern_categories() {

		register_block_pattern_category(
			'blok_page',
			array(
				'label'       => __( 'Pages', 'blok' ),
				'description' => __( 'A collection of full page layouts.', 'blok' ),
			)
		);

		register_block_pattern_category(
			'blok_post-format',
			array(
				'label'       => __( 'Post formats', 'blok' ),
				'description' => __( 'A collection of post format patterns.', 'blok' ),
			)
		);
	}
endif;
add_action( 'init', 'blok_pattern_categories' );

/**
 * Replace navigation icon 
 *
 * @param string $block_content
 * @param array $block
 * @return void
 */
function unified_fse__render_block_core_navigation( $block_content, $block ) {
	if (
		$block['blockName'] === 'core/navigation' && 
		! is_admin() &&
		! wp_is_json_request()
	) {
		return preg_replace('/\<svg width(.*?)\<\/svg\>/', '<svg width="36" height="36" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" aria-hidden="true" focusable="false"><rect x="4" y="9.5" width="30" height="2.5"></rect><rect x="4" y="19" width="30" height="2.5"></rect><rect x="4" y="28.5" width="30" height="2.5"></rect></svg>', $block_content);
	}

	return $block_content;
}
add_filter( 'render_block', 'unified_fse__render_block_core_navigation', null, 2 );

// add_filter( 'post_thumbnail_url', 'blok_post_thumbnail_url', 10, 3 );
// function blok_post_thumbnail_url( $thumbnail_url, $post, $size ) {
// 	echo '<pre>';
// 	print_r( $post );
// 	echo '</pre>';
// 	exit();
	
// 	if ( ! has_post_thumbnail( $post ) ) {
// 		$thumbnail_url = get_template_directory_uri() . '/assets/images/default-thumbnail.jpg';
// 	}
// 	echo '$thumbnail_url => ' . $thumbnail_url;
// 	exit();
// }


// add_filter( 'post_thumbnail_html', 'custom_fallback_featured_image', 10, 3 );
// function custom_fallback_featured_image( $html, $post_id, $post_thumbnail_id ) {
// 	if ( empty( $html ) ) {
// 		$fallback = get_template_directory_uri() . '/assets/images/default-thumbnail.jpg';
// 		$html     = '<img src="' . esc_url( $fallback ) . '" alt="Default Featured Image">';
// 	}
// 	return $html;
// }


function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


// add_action( 'after_setup_theme', function() {
// remove_theme_support( 'core-block-patterns' );
// } );