<?php
/**
 * Title: List of posts, 3 columns
 * Slug: blok/query-loop
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 3 columns, with featured image and post date.
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"right":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default" style="padding-right:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","sizeSlug":"medium","style":{"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomRight":"0px","bottomLeft":"0px"}}}} /-->

<!-- wp:group {"style":{"border":{"radius":{"bottomLeft":"6px","bottomRight":"6px"},"width":"1px"},"spacing":{"padding":{"right":"1.2rem","left":"1.2rem","top":"1.2rem","bottom":"1.2rem"}}},"borderColor":"border-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-gray-border-color" style="border-width:1px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-top:1.2rem;padding-right:1.2rem;padding-bottom:1.2rem;padding-left:1.2rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"moreText":"Read more »","excerptLength":30,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'No blog posts found. Please check back soon !', 'blok' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":""} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->