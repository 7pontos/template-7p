<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
    	<div class="row">
            <main id="main" class="site-main col-lg-9 col-md-9 col-sm-12 col-xs-12" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();
                // Include the page content template.
                get_template_part( 'content', 'page' );
            // End the loop.
            endwhile;
            ?>
            </main><!-- .site-main -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <?php get_sidebar('sidebar-pages'); ?>
            </div>
    	</div><!-- .row -->
	</div><!-- .content-area -->

<?php get_footer(); ?>