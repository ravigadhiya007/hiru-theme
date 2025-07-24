<?php
/**
 * Title: What We Do
 * Slug: blok/what-we-do
 * Categories: about, services, text
 * Description: A section with a heading, subheading, and a two-column layout highlighting main services, accompanied by a call-to-action button.
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-gray","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-bg-gray-background-color has-background" id="what-we-do" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"800px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"primary"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'What We Do', 'blok' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"black","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-black-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Delivering strategic solutions that fuel business success', 'blok' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">.</mark></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<p class="has-black-color has-text-color has-link-color"><strong><?php esc_html_e( 'Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.', 'blok' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla.', 'blok' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.', 'blok' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read More', 'blok' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","style":{"spacing":{"blockGap":"40px"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"35px","bottom":"35px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"15px"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:6px;padding-top:35px;padding-right:var(--wp--preset--spacing--40);padding-bottom:35px;padding-left:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:image {"id":724,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1769FF","#1769FF"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/graph-icon-white.svg" alt="graph-icon" class="wp-image-724" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"large"} -->
<h4 class="wp-block-heading has-text-align-left has-black-color has-text-color has-link-color has-large-font-size"><strong><?php esc_html_e( 'Strategy &amp; Consulting', 'blok' ); ?></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur ipsum elit.', 'blok' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"35px","bottom":"35px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"15px"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:6px;padding-top:35px;padding-right:var(--wp--preset--spacing--40);padding-bottom:35px;padding-left:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:image {"id":727,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1769FF","#1769FF"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand-icon-white.svg" alt="brand-icon" class="wp-image-727" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"large"} -->
<h4 class="wp-block-heading has-text-align-left has-black-color has-text-color has-link-color has-large-font-size"><strong><?php esc_html_e( 'Design &amp; Branding', 'blok' ); ?></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur ipsum elit.', 'blok' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"35px","bottom":"35px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"15px"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:6px;padding-top:35px;padding-right:var(--wp--preset--spacing--40);padding-bottom:35px;padding-left:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:image {"id":729,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1769FF","#1769FF"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gears-icon-white.svg" alt="gears-icon" class="wp-image-729" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"large"} -->
<h4 class="wp-block-heading has-text-align-left has-black-color has-text-color has-link-color has-large-font-size"><strong><?php esc_html_e( 'Development &amp; Tech', 'blok' ); ?></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur ipsum elit.', 'blok' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"35px","bottom":"35px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"15px"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:6px;padding-top:35px;padding-right:var(--wp--preset--spacing--40);padding-bottom:35px;padding-left:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:image {"id":735,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1769FF","#1769FF"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/chart-icon-white.svg" alt="chart-icon" class="wp-image-735" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"large"} -->
<h4 class="wp-block-heading has-text-align-left has-black-color has-text-color has-link-color has-large-font-size"><strong><?php esc_html_e( 'Marketing &amp; Growth', 'blok' ); ?></strong></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur ipsum elit.', 'blok' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->