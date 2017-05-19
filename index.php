<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php get_header(); ?>
    <main id="main" class="col-lg-8 col-md-8 col-sm-12 col-xs-12" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
        <?php if ( have_posts() ) : ?>
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php			
				while ( have_posts() ) : the_post();
					get_template_part( 'partials/blog', get_post_format() );
				endwhile;
				setepontos_numeric_posts_nav();
			else :
				get_template_part( 'content', 'none' );
			endif;
        ?>
    </main>
    <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar">
        <?php get_sidebar('sidebar-blog'); ?>
    </div><!-- .sidebar -->
<?php get_footer(); ?>
