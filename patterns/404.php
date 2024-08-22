<?php
/**
 * Title: 404
 * Slug:  my-universal-theme/404
 * @package myuniversaltheme
 * Categories: my-universal-theme-pattern-cat
 */
?>
<!-- wp:spacer {"height":"var(--wp--preset--spacing--30)"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="alignwide"><?php echo esc_html_x('404', 'Error code for a webpage that is not found.',
        'myuniversaltheme');
    ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"default"},"style":{"spacing":{"margin":{"top":"5px"}}}} -->
<div class="wp-block-group alignwide" style="margin-top:5px">
    <!-- wp:paragraph -->
    <p><?php echo esc_html_x('This page could not be found.', 'Message to convey that a webpage could not be found',
            'myuniversaltheme'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:search {"label":"<?php echo esc_html_x('Search', 'label',
        'myuniversaltheme'); ?>","placeholder":"<?php echo esc_attr_x('Search...', 'placeholder for search field',
        'myuniversaltheme'); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e('Search',
        'myuniversaltheme'); ?>","buttonUseIcon":true,"align":"center"} /-->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--70)"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
