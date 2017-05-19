<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php 
	$post_id = get_the_ID();
	$post_link = get_permalink();
?>
<article id="post-<?php echo $post_id; ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<header class="entry-header">
		<?php
			echo '<div class="entry-thumb" itemprop="image"><a href="'.$post_link.'">'.get_the_post_thumbnail( $post_id, 'full' ).'</a></div>';
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( $post_link ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->
	<div class="entry-content" itemprop="text">
		<?php the_excerpt(); ?>   
	</div><!-- .entry-content -->
	<footer class="entry-footer"></footer><!-- .entry-footer -->
</article><!-- #post-## -->
