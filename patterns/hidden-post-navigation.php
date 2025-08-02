<?php
/**
 * Title: Post navigation
 * Slug: blok/post-navigation
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

?>
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
	<!-- wp:post-navigation-link {"type":"previous","label":"<?php esc_html_e( 'Previous post', 'blok' ); ?>","arrow":"chevron","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->
	<!-- wp:post-navigation-link {"label":"<?php esc_html_e( 'Next post', 'blok' ); ?>","arrow":"chevron","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->
</div>
<!-- /wp:group -->