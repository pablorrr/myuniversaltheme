<?php
/**
 * Title: No Results Content
 * Slug: my-universal-theme/no-results
 * Categories: my-universal-theme-pattern-cat
 * @package myuniversaltheme
 */
?>
<!-- wp:paragraph -->
<p>
<?php echo __( ' pattern Sorry, but nothing matched your search terms.', 'myuniversaltheme' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'myuniversaltheme' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'myuniversaltheme' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'myuniversaltheme' ); ?>","buttonUseIcon":true} /-->
