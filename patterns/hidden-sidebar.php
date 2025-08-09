<?php
/**
 * Title: Sidebar
 * Slug: blok/hidden-sidebar
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Blok
 * @since Blok 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div id="sidebar" class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"black","fontSize":"large"} -->
<h4 class="wp-block-heading has-black-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Categories', 'blok' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:categories {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-default"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"black","fontSize":"large"} -->
<h4 class="wp-block-heading has-black-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Recent Posts', 'blok' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:query {"queryId":26,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"1","width":"85px","sizeSlug":"thumbnail","style":{"border":{"radius":"6px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"black","fontSize":"medium"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e( 'No recent posts found. Explore other sections of the site!', 'blok' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-default"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"black","fontSize":"large"} -->
<h4 class="wp-block-heading has-black-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Tags', 'blok' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"numberOfTags":10,"smallestFontSize":"18px","largestFontSize":"18px","className":"is-style-default","style":{"typography":{"lineHeight":"1"}}} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-default"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"6px"}},"backgroundColor":"bg-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-bg-gray-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"black","fontSize":"large"} -->
<h4 class="wp-block-heading has-black-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Subscribe', 'blok' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:html -->
<form action="/">
	<input type="text" placeholder="<?php esc_attr_e( 'Email address', 'blok' ); ?>" name="mail" required="">
	<input type="submit" value="<?php esc_attr_e( 'Subscribe', 'blok' ); ?>">
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->