<?php
/**
 * Title: Our Blogs
 * Slug: blok/our-blogs
 * Categories: posts
 * Description: A section displaying recent blog posts with featured images, titles, and excerpts in a clean layout.
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" id="our-blogs" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"800px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"primary"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'News And Insight', 'blok' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"black","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-black-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Stay informed with the latest updates, ideas, and industry trends', 'blok' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">.</mark></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:0"><!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"right":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default" style="padding-right:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","sizeSlug":"medium","style":{"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomRight":"0px","bottomLeft":"0px"}}}} /-->

<!-- wp:group {"style":{"border":{"radius":{"bottomLeft":"6px","bottomRight":"6px"},"width":"1px"},"spacing":{"padding":{"right":"1.2rem","left":"1.2rem","top":"1.2rem","bottom":"1.2rem"}}},"borderColor":"border-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-gray-border-color" style="border-width:1px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-top:1.2rem;padding-right:1.2rem;padding-bottom:1.2rem;padding-left:1.2rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"black","fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'Read more »', 'blok' ); ?>","excerptLength":30,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'No blog posts found. Please check back soon !', 'blok' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"left"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-left wp-element-button"><?php esc_html_e( 'Read More', 'blok' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->