<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php get_header(); ?>
<?php $post_id = get_the_ID(); ?>
<?php $categories = get_the_category( $post_id ); ?>
<div id="page" class="site container">
<div id="content" class="site-content <?php echo $categories[0]->slug; ?>">
	<div id="primary" class="content-area">
    	<div class="row">
            <main id="main" class="site-main col-lg-8 col-md-8 col-sm-12 col-xs-12" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
            <?php
				if ( function_exists('yoast_breadcrumb') ) {
					 yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				}
			?>
            <?php while ( have_posts() ) : the_post();	?>
                <?php 
					$post_link = get_permalink();
					$urlbase = get_site_url();
					$image_thumb_id = get_post_thumbnail_id($post_id);
					$image_alt = get_post_meta($image_thumb_id, '_wp_attachment_image_alt', false);
				?>
				<article id="post-<?php echo $post_id; ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
					<header class="entry-header">
						<?php
							the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( $post_link ) ), '</a></h2>' );
							echo '<div class="entry-thumb" itemprop="image"><a href="'.$post_link.'">'.get_the_post_thumbnail( $post_id, 'full' ).'</a><span class="legend">'.$image_alt[0].'</span></div>';
						?>
					</header><!-- .entry-header -->
					<div class="entry-content" itemprop="text">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					<footer class="entry-footer">
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->
            <?php endwhile; ?>
            </main><!-- .site-main -->
            <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar">
            	<?php get_sidebar('sidebar-posts'); ?>
            </div>
    	</div><!-- .row -->
	</div><!-- .content-area -->

<?php get_footer(); ?>