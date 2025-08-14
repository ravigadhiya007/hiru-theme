<?php
/**
 * Hiru functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Hiru
 * @since Hiru 1.0
 */

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'hiru_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Hiru 1.0
	 *
	 * @return void
	 */
	function hiru_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'hiru_editor_style' );

// Enqueues theme style and script on the front.
if ( ! function_exists( 'hiru_enqueue_theme_scripts' ) ) :
	/**
	 * Enqueue theme styles and scripts.
	 *
	 * @since Hiru 1.0
	 *
	 * @return void
	 */
	function hiru_enqueue_theme_scripts() {
		// Enqueues style.css on the front.
		wp_enqueue_style(
			'hiru-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueues script.js on the front.
		wp_enqueue_script(
			'hiru-script',
			get_parent_theme_file_uri( 'assets/js/script.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'hiru_enqueue_theme_scripts' );

// Registers custom block styles.
if ( ! function_exists( 'hiru_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Hiru 1.0
	 *
	 * @return void
	 */
	function hiru_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'hiru' ),
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
add_action( 'init', 'hiru_block_styles' );

/**
 * Replace navigation icon.
 *
 * @param string $block_content Block content.
 * @param array  $block Block data object.
 * @return string
 */
function hiru__render_block_core_navigation( $block_content, $block ) {
	if (
		'core/navigation' === $block['blockName'] &&
		! is_admin() &&
		! wp_is_json_request()
	) {
		return preg_replace( '/\<svg width(.*?)\<\/svg\>/', '<svg width="36" height="36" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" aria-hidden="true" focusable="false"><rect x="4" y="9.5" width="30" height="2.5"></rect><rect x="4" y="19" width="30" height="2.5"></rect><rect x="4" y="28.5" width="30" height="2.5"></rect></svg>', $block_content );
	}

	return $block_content;
}
add_filter( 'render_block', 'hiru__render_block_core_navigation', null, 2 );

// Registers pattern categories.
if ( ! function_exists( 'hiru__pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Hiru 1.0
	 *
	 * @return void
	 */
	function hiru__pattern_categories() {

		register_block_pattern_category(
			'hiru_team',
			array(
				'label'       => __( 'Team', 'hiru' ),
				'description' => __( 'A collection of team member layouts.', 'hiru' ),
			)
		);
	}
endif;
add_action( 'init', 'hiru__pattern_categories' );
