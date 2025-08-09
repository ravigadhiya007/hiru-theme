<?php
/**
 * Title: 404
 * Slug: blok/hidden-404
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"550px"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":4,"className":"heading-404","style":{"typography":{"fontSize":"20rem","fontStyle":"normal","fontWeight":"800","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<h4 class="wp-block-heading has-text-align-center heading-404 has-primary-color has-text-color has-link-color" style="font-size:20rem;font-style:normal;font-weight:800;line-height:1"><?php esc_html_e( '404', 'blok' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0"}}},"textColor":"black","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-black-color has-text-color has-link-color has-x-large-font-size" style="margin-top:0;font-style:normal;font-weight:700"><?php esc_html_e( 'Page not Found', 'blok' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'The page you are looking for doesn’t exist or may have been moved. Please check the URL or return to the homepage.', 'blok' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Back to Home', 'blok' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->