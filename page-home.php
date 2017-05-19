<?php
/*
Template Name: Home Page
*/
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			// Include the page content template.
			get_template_part( 'content', 'home' );
		// End the loop.
		endwhile;
		?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>