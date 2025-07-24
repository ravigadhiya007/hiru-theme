<?php
/**
 * Title: Testimonials
 * Slug: blok/testimonials
 * Categories: testimonials
 * Description: A section highlighting customer testimonials in a visually engaging layout with a background image.
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" id="testimonials" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/man-designing-website-layout.webp","id":821,"hasParallax":true,"dimRatio":70,"overlayColor":"black","isUserOverlayColor":true,"minHeight":450,"contentPosition":"center center","sizeSlug":"full","align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"60px","bottom":"60px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-parallax" style="padding-top:60px;padding-right:0;padding-bottom:60px;padding-left:0;min-height:450px"><div class="wp-block-cover__image-background wp-image-821 size-full has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/man-designing-website-layout.webp)"></div><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"center","contentSize":"800px"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"id":929,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1769FF","#1769FF"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/quote-left-icon.svg" alt="quote-left-icon" class="wp-image-929"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="margin-top:0;margin-bottom:0"><em><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.', 'blok' ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:30px"><!-- wp:image {"id":982,"width":"80px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100%","width":"4px"}},"borderColor":"primary"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-member-1.webp" alt="happy-customer" class="has-border-color has-primary-border-color wp-image-982" style="border-width:4px;border-radius:100%;width:80px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'James Anderson', 'blok' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|border-gray"}}}},"textColor":"border-gray","fontSize":"small"} -->
<p class="has-border-gray-color has-text-color has-link-color has-small-font-size"><em><?php esc_html_e( 'Sales Manager', 'blok' ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->