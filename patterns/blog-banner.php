<?php
/**
 * Title: Blog Banner
 * Slug: blok/blog-banner
 * Categories: banner
 * Description: A medium centered-aligned page/post title with background image.
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/signing-documents-on-laptop-in-office.webp","id":250,"hasParallax":true,"dimRatio":60,"overlayColor":"black","isUserOverlayColor":true,"minHeight":250,"sizeSlug":"large","align":"full","layout":{"type":"constrained","contentSize":"950px"}} -->
<div class="wp-block-cover alignfull has-parallax" style="min-height:250px">
	<div class="wp-block-cover__image-background wp-image-250 size-large has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/signing-documents-on-laptop-in-office.webp)"></div>
	<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Blogs', 'blok' ); ?></h1>
		<!-- /wp:heading -->
	</div>
</div>
<!-- /wp:cover -->