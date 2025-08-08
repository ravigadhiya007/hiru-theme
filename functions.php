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

/**
 * Replace navigation icon.
 *
 * @param string $block_content Block content.
 * @param array  $block Block data object.
 * @return string
 */
function blok__render_block_core_navigation( $block_content, $block ) {
	if (
		'core/navigation' === $block['blockName'] &&
		! is_admin() &&
		! wp_is_json_request()
	) {
		return preg_replace( '/\<svg width(.*?)\<\/svg\>/', '<svg width="36" height="36" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" aria-hidden="true" focusable="false"><rect x="4" y="9.5" width="30" height="2.5"></rect><rect x="4" y="19" width="30" height="2.5"></rect><rect x="4" y="28.5" width="30" height="2.5"></rect></svg>', $block_content );
	}

	return $block_content;
}
add_filter( 'render_block', 'blok__render_block_core_navigation', null, 2 );
