<?php
/**
 * Title: Our Team
 * Slug: hiru/our-team
 * Categories: team, text
 * Description: A section introducing team members with names, roles, and optional photos or bios.
 *
 * @package WordPress
 * @subpackage Hiru
 * @since Hiru 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-gray","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-bg-gray-background-color has-background" id="our-team" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"800px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"primary"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Meet Our Team', 'hiru' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"black","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-black-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Passionate professionals working together to make a difference', 'hiru' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">.</mark></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"24px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"22px","right":"22px"},"blockGap":"10px"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:6px;padding-top:25px;padding-right:22px;padding-bottom:25px;padding-left:22px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:image {"id":980,"width":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100%","width":"4px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"borderColor":"primary"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-member-1.webp" alt="team-member-1" class="has-border-color has-primary-border-color wp-image-980" style="border-width:4px;border-radius:100%;aspect-ratio:1;object-fit:cover;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<p class="has-text-align-center has-black-color has-text-color has-link-color"><strong><?php esc_html_e( 'Michael Carter', 'hiru' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|border-gray"}}}},"textColor":"border-gray"} -->
<p class="has-text-align-center has-border-gray-color has-text-color has-link-color"><em><?php esc_html_e( 'CEO', 'hiru' ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'hiru' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#FFFFFF","iconBackgroundColor":"primary","iconBackgroundColorValue":"#1769FF","size":"has-normal-icon-size","align":"center","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"6px"},"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"22px","right":"22px"},"blockGap":"10px"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:6px;padding-top:25px;padding-right:22px;padding-bottom:25px;padding-left:22px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:image {"id":999,"width":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100%","width":"4px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"borderColor":"primary"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-member-2.webp" alt="team-member-2" class="has-border-color has-primary-border-color wp-image-999" style="border-width:4px;border-radius:100%;aspect-ratio:1;object-fit:cover;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<p class="has-text-align-center has-black-color has-text-color has-link-color"><strong><?php esc_html_e( 'Daniel Miller', 'hiru' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|border-gray"}}}},"textColor":"border-gray"} -->
<p class="has-text-align-center has-border-gray-color has-text-color has-link-color"><em><?php esc_html_e( 'COO', 'hiru' ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'hiru' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#FFFFFF","iconBackgroundColor":"primary","iconBackgroundColorValue":"#1769FF","size":"has-normal-icon-size","align":"center","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"6px"},"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"22px","right":"22px"},"blockGap":"10px"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:6px;padding-top:25px;padding-right:22px;padding-bottom:25px;padding-left:22px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:image {"id":992,"width":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100%","width":"4px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"borderColor":"primary"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-member-3.webp" alt="team-member-3" class="has-border-color has-primary-border-color wp-image-992" style="border-width:4px;border-radius:100%;aspect-ratio:1;object-fit:cover;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<p class="has-text-align-center has-black-color has-text-color has-link-color"><strong><?php esc_html_e( 'Emily Johnson', 'hiru' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|border-gray"}}}},"textColor":"border-gray"} -->
<p class="has-text-align-center has-border-gray-color has-text-color has-link-color"><em><?php esc_html_e( 'Sales Manager', 'hiru' ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'hiru' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#FFFFFF","iconBackgroundColor":"primary","iconBackgroundColorValue":"#1769FF","size":"has-normal-icon-size","align":"center","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"6px"},"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"22px","right":"22px"},"blockGap":"10px"},"shadow":"var:preset|shadow|natural"},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:6px;padding-top:25px;padding-right:22px;padding-bottom:25px;padding-left:22px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:image {"id":996,"width":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100%","width":"4px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"borderColor":"primary"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-member-4.webp" alt="team-member-4" class="has-border-color has-primary-border-color wp-image-996" style="border-width:4px;border-radius:100%;aspect-ratio:1;object-fit:cover;width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<p class="has-text-align-center has-black-color has-text-color has-link-color"><strong><?php esc_html_e( 'Sophia Davis', 'hiru' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|border-gray"}}}},"textColor":"border-gray"} -->
<p class="has-text-align-center has-border-gray-color has-text-color has-link-color"><em><?php esc_html_e( 'Client Success Manager', 'hiru' ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'hiru' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#FFFFFF","iconBackgroundColor":"primary","iconBackgroundColorValue":"#1769FF","size":"has-normal-icon-size","align":"center","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"6px"},"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->