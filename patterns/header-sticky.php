<?php
/**
 * Title: Sticky header
 * Slug: hiru/header-sticky
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site sticky header with site title and navigation.
 *
 * @package WordPress
 * @subpackage Hiru
 * @since Hiru 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"position":{"type":""}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" id="sticky-header"><!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"dimensions":{"minHeight":"60px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="min-height:60px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group">
	<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"}} -->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'hiru' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About US', 'hiru' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'hiru' ); ?>","url":"#"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'hiru' ); ?>","url":"#"} /-->
		<!-- wp:navigation-submenu {"label":"<?php esc_html_e( 'Pages', 'hiru' ); ?>","url":"#"} -->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog Page', 'hiru' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( '404 Page', 'hiru' ); ?>","url":"#"} /-->
		<!-- /wp:navigation-submenu -->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact Us', 'hiru' ); ?>","url":"#"} /-->
	<!-- /wp:navigation -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"mobile-hide"} -->
<div class="wp-block-buttons mobile-hide"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Contact', 'hiru' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->