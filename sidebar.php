<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div id="secondary" class="secondary">	
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>
	</div><!-- .secondary -->
<?php endif; ?>
