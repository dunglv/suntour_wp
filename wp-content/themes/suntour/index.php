<?php get_header(); ?>
<?php if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
	<div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
<?php dynamic_sidebar( 'custom-header-widget' ); ?>
</div>
<?php endif; ?>
<!-- //Modal7 -->
<?php get_footer(); ?>