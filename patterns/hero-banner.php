<?php
/**
 * Title: Hero Banner
 * Slug: blok/hero-banner
 * Categories: banner
 * Description: A large left-aligned heading with a title, background image and call to action button.
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

?>
<!-- wp:group {"align":"full","className":"hero-banner","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hero-banner" id="hero-banner"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/signing-documents-on-laptop-in-office.webp","id":622,"hasParallax":true,"dimRatio":60,"isUserOverlayColor":true,"minHeight":650,"contentPosition":"center center","sizeSlug":"large","align":"full","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-parallax" style="padding-right:0;padding-left:0;min-height:650px"><div class="wp-block-cover__image-background wp-image-622 size-large has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/signing-documents-on-laptop-in-office.webp)"></div><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"1050px"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"primary"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color" style="margin-bottom:10px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Empowering Your Vision', 'blok' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"5rem","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"0","right":"0","left":"0"}}}} -->
<h1 class="wp-block-heading has-text-align-left" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--40);margin-left:0;font-size:5rem;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'We turn ideas into impactful digital experiences', 'blok' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">.</mark></h1>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Read More', 'blok' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
