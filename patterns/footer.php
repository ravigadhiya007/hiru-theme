<?php
/**
 * Title: Footer
 * Slug: blok/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with copyright information and social links.
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"0","right":"0"}}},"backgroundColor":"black","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-black-background-color has-background" style="padding-top:4rem;padding-right:0;padding-bottom:4rem;padding-left:0"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":2,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}},"textColor":"gray"} -->
<p class="has-gray-color has-text-color has-link-color"><?php esc_html_e( 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica', 'blok' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color"><strong><?php esc_html_e( 'Work With Us', 'blok' ); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}},"textColor":"gray"} -->
<p class="has-gray-color has-text-color has-link-color"><?php esc_html_e( 'Email us at', 'blok' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="mailto:mail@example.com">mail@example.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color"><strong><?php esc_html_e( 'General Questions', 'blok' ); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}},"textColor":"gray"} -->
<p class="has-gray-color has-text-color has-link-color"><?php esc_html_e( 'Reach out at', 'blok' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="mailto:spport@example.com">spport@example.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color"><strong><?php esc_html_e( 'Stay Connected', 'blok' ); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}},"textColor":"gray"} -->
<p class="has-gray-color has-text-color has-link-color"><?php esc_html_e( 'Follow us on social media', 'blok' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","openInNewTab":true,"className":"is-style-logos-only footer-social","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only footer-social"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color"><strong><?php esc_html_e( 'Company', 'blok' ); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"gray","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About Us', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Our Team', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Careers', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'News & Press', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'blok' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color"><strong><?php esc_html_e( 'What We Do', 'blok' ); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"gray","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Our Process', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Case Studies', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Industries We Serve', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Technology Stack', 'blok' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color"><strong><?php esc_html_e( 'Quick Links', 'blok' ); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"gray","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Support', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy Policy', 'blok' ); ?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'blok' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"color":{"background":"#000000e6"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#000000e6"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}},"textColor":"gray"} -->
<p class="has-text-align-center has-gray-color has-text-color has-link-color"><?php esc_html_e( 'Copyright © 2025 Blok.', 'blok' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->